<?php

namespace BusyNoggin\BnAdaptiveprofiles\Service;

class HeaderService implements \TYPO3\CMS\Core\SingletonInterface {

	/**
	 * Sends HTTP headers related to adaptive profiles.
	 *
	 * @return void
	 */
	public function sendAdaptiveProfileHeaders() {
		if ($GLOBALS['TSFE']->config['config']['tx_bnadaptiveprofiles.']['enable'] && (TYPO3_MODE === 'FE') && !\TYPO3\CMS\Core\Utility\GeneralUtility::_GET('tx_bnadaptiveprofile')) {
			$profileService = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('BusyNoggin\\BnAdaptiveprofiles\\Service\\ProfileService');
			$currentProfile = $profileService->getCurrentProfile();
			$currentProfileName = $currentProfile['name'];
		} elseif (\TYPO3\CMS\Core\Utility\GeneralUtility::_GET('tx_bnadaptiveprofile')) {
			$currentProfileName = strip_tags(\TYPO3\CMS\Core\Utility\GeneralUtility::_GET('tx_bnadaptiveprofile'));
		}

		header('X-Adaptive-Profile: ' . $currentProfileName);
	}
}

?>