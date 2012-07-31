<?php

class Tx_BnAdaptiveProfiles_Service_FrontendService implements t3lib_Singleton {

	public function includeAdapativeProfilesInPageRenderer() {
		if (TYPO3_MODE === 'FE') {
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

}

?>