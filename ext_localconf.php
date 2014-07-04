<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_bnadaptiveprofiles_profile = 1
');

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][] = 'BusyNoggin\\BnAdaptiveprofiles\\Service\\FrontendService->includeAdapativeProfilesInPageRenderer';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['createHashBase'][] = 'BusyNoggin\\BnAdaptiveprofiles\\Service\\FrontendService->includeAdapativeProfilesInHash';

$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['bn_adaptiveprofiles']);
$filterContentElementsByProfile = (array_key_exists('filterContentElementsByProfile', $extConf)) ? $extConf['filterContentElementsByProfile'] : TRUE;
if ($filterContentElementsByProfile) {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_page.php']['addEnableColumns'][] = 'BusyNoggin\\BnAdaptiveprofiles\\Service\\FrontendService->processEnableFieldsForAdaptiveProfiles';
}

if (TYPO3_MODE === 'FE') {
	/**
	 * User function to check if the specified profile is in use.
	 *
	 * @param string $profileName
	 * @return boolean
	 */
	function user_hasProfile($profileName) {
		$profileService = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('BusyNoggin\\BnAdaptiveprofiles\\Service\\ProfileService');
		return $profileService->hasProfile($profileName);
	}

	/**
	 * User function to retrieve a given device property.
	 *
	 * @param string $propertyName
	 * @param mixed $propertyValue
	 * @return string
	 */
	function user_deviceIsMobile() {
		$profileService = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('BusyNoggin\\BnAdaptiveprofiles\\Service\\ProfileService');
		return $profileService->deviceHasPropertyValue('IsMobile', TRUE);
	}
}

?>