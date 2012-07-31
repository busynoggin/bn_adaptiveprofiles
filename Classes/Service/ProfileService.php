<?php

class Tx_BnAdaptiveProfiles_Service_ProfileService implements t3lib_Singleton {

	protected $screenWidth = NULL;
	protected $defaultProfile = NULL;
	protected $currentProfile = NULL;
	protected $profiles = array();

	/**
	 * Checks if the current user matches the given profile.
	 *
	 * @param string $profileName
	 * @return boolean
	 */
	public function hasProfile($profileName) {
		$hasProfile = FALSE;
		$currentProfile = $this->getCurrentProfile();

		if ($currentProfile['name'] === $profileName) {
			$hasProfile = TRUE;
		}

		return $hasProfile;
	}

	/**
	 * Gets all profiles
	 *
	 * @return array
	 */
	public function getProfiles() {
		if (!$this->profiles || !count($this->profiles)) {
			$statement = $GLOBALS['TYPO3_DB']->prepare_SELECTquery('*', 'tx_bnadaptiveprofiles_profile');
	 		$statement->execute();
	 		while(($row = $statement->fetch()) !== FALSE) {
	 			$this->profiles[$row['name']] = $row;
	 		}
 		}

		return $this->profiles;
	}

	/**
	 * Gets a profile by name
	 *
	 * @param $profileName
	 * @return array
	 */
	public function getProfile($profileName) {
		if (!$this->profiles || !count($this->profiles)) {
			$this->getProfiles();
		}

		if (array_key_exists($profileName, $this->profiles)) {
			$profile = $this->profiles[$profileName];
		} else {
			$profile = NULL;
		}

		return $profile;
	}

	/**
	 * Gets the default profile
	 *
	 * @return array
	 */
	public function getDefaultProfile() {
		if ($this->defaultProfile === NULL) {
			$profiles = $this->getProfiles();
			foreach ($profiles as $profile) {
				if ($profile['is_default_profile']) {
					$this->defaultProfile = $profile;
					break;
				}
			}
		}

		return $this->defaultProfile;
	}

	/**
	 * Gets the current profile
	 *
	 * @return array
	 */
	public function getCurrentProfile() {
		if (!$this->currentProfile) {
			$screenWidth = $this->getScreenWidth();
			$profiles = $this->getProfiles();

			foreach ($profiles as $name => $profile) {
				if (($profile['minimum_width'] < $screenWidth) && ($screenWidth <= $profile['maximum_width'])) {
					$this->currentProfile = $profile;
					break;
				}
			}

			if (!$this->currentProfile) {
				$this->currentProfile = $this->getDefaultProfile();
			}
		}

		return $this->currentProfile;
	}

	/**
	 * Gets the screen width, or a guess at it.
	 *
	 * @return integer
	 */
	protected function getScreenWidth() {
		if ($this->screenWidth === NULL) {
			$screenWidth = $this->getScreenWidthFromCookie();
			if (!$screenWidth) {
				$screenWidth = $this->getScreenWidthFromUserAgent();
			}

			$this->screenWidth = $screenWidth;
		}

		return $this->screenWidth;
	}

	/**
	 * Reads the screen width from a cookie
	 *
	 * @return integer
	 */
	protected function getScreenWidthFromCookie() {
		$screenWidth = $_COOKIE['screenWidth'];
		return $screenWidth;
	}

	/**
	 * Guesses the screen width based on the user agent.
	 *
	 * @return integer
	 */
	protected function getScreenWidthFromUserAgent() {
		$wurflDir = t3lib_extMgm::extPath('bn_adaptiveprofiles') . 'Resources/Private/PHP/WURFL';
		$resourcesDir = t3lib_extMgm::extPath('bn_adaptiveprofiles') . 'Resources/Private/Data';
		require_once($wurflDir . '/Application.php');

		$persistenceDir = PATH_site . 'typo3temp/wurfl/persistence';
		$cacheDir = PATH_site . 'typo3temp/wurfl/cache';

		// Create WURFL Configuration
		$wurflConfig = new WURFL_Configuration_InMemoryConfig();

		// Set location of the WURFL File
		$wurflConfig->wurflFile($resourcesDir.'/wurfl.zip');

		// Set the match mode for the API ('performance' or 'accuracy')
		$wurflConfig->matchMode('performance');

		// Setup WURFL Persistence
		$wurflConfig->persistence('file', array('dir' => $persistenceDir));

		// Setup Caching
		$wurflConfig->cache('file', array('dir' => $cacheDir, 'expiration' => 36000));

		// Create a WURFL Manager Factory from the WURFL Configuration
		$wurflManagerFactory = new WURFL_WURFLManagerFactory($wurflConfig);

		// Create a WURFL Manager
		/* @var $wurflManager WURFL_WURFLManager */
		$wurflManager = $wurflManagerFactory->create();

		$wurflInfo = $wurflManager->getWURFLInfo();
		$requestingDevice = $wurflManager->getDeviceForHttpRequest($_SERVER);

		if ($requestingDevice->id === 'generic_web_browser') {
			$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['bn_adaptiveprofiles']);
			$screenWidth = $extConf['defaultDesktopScreenWidth'] ? $extConf['defaultDesktopScreenWidth'] : $requestingDevice->getCapability('resolution_width');
		} else {
			$screenWidth = $requestingDevice->getCapability('resolution_width');
		}
	}
}

/**
 * User function to check if the specified profile is in use.
 *
 * @return boolean
 */
function user_hasProfile($profileName) {
	$profileService = t3lib_div::makeInstance('Tx_BnAdaptiveProfiles_Service_ProfileService');
	return $profileService->hasProfile($profileName);
}

?>