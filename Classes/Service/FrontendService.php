<?php

class Tx_BnAdaptiveProfiles_Service_FrontendService implements t3lib_Singleton {

	public function includeAdapativeProfilesInPageRenderer() {
		if ((TYPO3_MODE === 'FE') && !t3lib_div::_GET('tx_bnadaptiveprofile')) {
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

	 		// Read application JS into string
	 		$js .= t3lib_div::getUrl(t3lib_extMgm::extPath('bn_adaptiveprofiles') . 'Resources/Public/JavaScript/application.js');

	 		// Add it all to the page renderer as inline JavaScript
	 		$GLOBALS['TSFE']->getPageRenderer()->addJsInlineCode('bn_adaptiveprofiles_profiles', $js);
	 	}
	}

	public function processEnableFieldsForAdaptiveProfiles($params) {
		$table = $params['table'];
		$ignoreArray = $params['ignore_array'];

		if ($table === 'tt_content' && !$ignoreArray['bn_adaptiveprofiles']) {
			$profileService = t3lib_div::makeInstance('Tx_BnAdaptiveProfiles_Service_ProfileService');
			$currentProfile = $profileService->getCurrentProfile();

			$query = ' AND (bn_adaptiveprofiles=\'0\' OR bn_adaptiveprofiles IS NULL OR bn_adaptiveprofiles=\'\' OR ' . $GLOBALS['TYPO3_DB']->listQuery('bn_adaptiveprofiles', $currentProfile['uid'], 'tt_content') . ') ';
		}

		return $query;
	}

}

?>