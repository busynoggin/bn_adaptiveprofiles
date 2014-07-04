<?php

namespace BusyNoggin\BnAdaptiveprofiles\Service;

class ProfileService implements \TYPO3\CMS\Core\SingletonInterface {

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
			$table = 'tx_bnadaptiveprofiles_profile';
			$statement = $GLOBALS['TYPO3_DB']->prepare_SELECTquery('*', $table, '1=1 ' . $GLOBALS['TSFE']->sys_page->enableFields($table));
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
		// If there's a parameter in the URL, use that as a current.
		$defaultProfileFromUrl = strip_tags(\TYPO3\CMS\Core\Utility\GeneralUtility::_GET('tx_bnadaptiveprofile'));
		if ($defaultProfileFromUrl) {
			$this->currentProfile = $this->getProfile($defaultProfileFromUrl);
		}

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
		$pathTo51Degrees = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('bn_adaptiveprofiles') . 'Resources/Private/PHP/51Degrees/';
		include_once($pathTo51Degrees . '51Degrees.mobi.php');
		include_once($pathTo51Degrees . '51Degrees.mobi.usage.php');
		if ($_51d['ScreenPixelsWidth'] && $_51d['ScreenPixelsWidth'] !== 'Unknown') {
			$screenWidth = $_51d['ScreenPixelsWidth'];
		} else {
			$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['bn_adaptiveprofiles']);
			$screenWidth = $extConf['defaultScreenWidth'] ? $extConf['defaultScreenWidth'] : 1024;
		}

		return $screenWidth;
	}

	/**
	 * Checks whether the device has the given value for the property
	 *
	 * @param string $propertyName
	 * @param mixed $propertyValue
	 */
	public function deviceHasPropertyValue($propertyName, $propertyValue) {
		$pathTo51Degrees = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('bn_adaptiveprofiles') . 'Resources/Private/PHP/51Degrees/';
		include_once($pathTo51Degrees . '51Degrees.mobi.php');
		include_once($pathTo51Degrees . '51Degrees.mobi.usage.php');
		if (array_key_exists($propertyName, $_51d)) {
			$_51dValue = $_51d[$propertyName];

			if ($_51dValue === 'True') {
				$_51dValue = TRUE;
			} elseif ($_51dValue === 'False') {
				$_51dValue = FALSE;
			}

			$result = ($_51dValue == $propertyValue);
		} else {
			$result = FALSE;
		}

		return $result;
	}
}

?>