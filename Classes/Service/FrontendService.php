<?php

namespace BusyNoggin\BnAdaptiveprofiles\Service;

class FrontendService implements \TYPO3\CMS\Core\SingletonInterface {

	/**
	 * Includes the JavaScript for adaptive profiles in the frontend output of the page.
	 * Requires that config.tx_bnadaptiveprofiles_enable=1 is set.
	 *
	 * @return void
	 */
	public function includeAdapativeProfilesInPageRenderer() {
		if ($GLOBALS['TSFE']->config['config']['tx_bnadaptiveprofiles.']['enable'] && (TYPO3_MODE === 'FE') && !t3lib_div::_GET('tx_bnadaptiveprofile')) {
			$profileService = t3lib_div::makeInstance('Tx_BnAdaptiveProfiles_Service_ProfileService');

			// Convert profiles to JSON
			$profiles = $profileService->getProfiles();
			$currentProfile = $profileService->getCurrentProfile();
			$jsonProfiles = array();
			foreach ($profiles as $profile) {
				$jsonProfiles[] = array(
					'name' => $profile['name'],
					'minimumWidth' => $profile['minimum_width'],
					'maximumWidth' => $profile['maximum_width'],
					'isCurrentProfile' => ($profile['name'] === $currentProfile['name'])
				);
	 		}
	 		$js = 'var BN_ADAPTIVE_PROFILES_CONFIG = { profiles: ' . json_encode($jsonProfiles) . '};' . LF;

	 		$javaScriptPath = ($GLOBALS['TSFE']->config['config']['tx_bnadaptiveprofiles.']['javaScriptPath']) ? $GLOBALS['TSFE']->config['config']['tx_bnadaptiveprofiles']['javaScriptPath'] : 'EXT:bn_adaptiveprofiles/Resources/Public/JavaScript/application.js';

	 		// Read application JS into string
	 		$js .= t3lib_div::getUrl(t3lib_div::getFileAbsFileName($javaScriptPath));

	 		// Add it all to the page renderer as inline JavaScript
	 		$GLOBALS['TSFE']->getPageRenderer()->addJsInlineCode('bn_adaptiveprofiles_profiles', $js);
	 	}
	}

	/**
	 * Includes adaptive profiles in the enableFields handling.
	 *
	 * @param array $params
	 * @return string
	 */
	public function processEnableFieldsForAdaptiveProfiles($params) {
		$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['bn_adaptiveprofiles']);
		$filterContentElementsByProfile = $extConf['filterContentElementsByProfile'] ? (bool) $extConf['filterContentElementsByProfile'] : TRUE;

		if ($filterContentElementsByProfile) {
			$table = $params['table'];
			$ignoreArray = $params['ignore_array'];

			if ($table === 'tt_content' && !$ignoreArray['bn_adaptiveprofiles']) {
				$profileService = t3lib_div::makeInstance('Tx_BnAdaptiveProfiles_Service_ProfileService');
				$currentProfile = $profileService->getCurrentProfile();

				$query = ' AND (bn_adaptiveprofiles=\'0\' OR bn_adaptiveprofiles IS NULL OR bn_adaptiveprofiles=\'\' OR ' . $GLOBALS['TYPO3_DB']->listQuery('bn_adaptiveprofiles', $currentProfile['uid'], 'tt_content') . ') ';
			}
		} else {
			$query = '';
		}

		return $query;
	}

	/**
	 * Includes the adaptive profiles in the page hash.
	 *
	 * @param array $params
	 * @return void
	 */
	public function includeAdapativeProfilesInHash(&$params) {
		if ($GLOBALS['TSFE']->config['config']['tx_bnadaptiveprofiles_enable']) {
			$profileService = t3lib_div::makeInstance('Tx_BnAdaptiveProfiles_Service_ProfileService');
			$profiles = $profileService->getProfiles();
			$currentProfile = $profileService->getCurrentProfile();

			$params['hashParameters']['profile'] = $currentProfile['name'];
		}
	}

}

?>