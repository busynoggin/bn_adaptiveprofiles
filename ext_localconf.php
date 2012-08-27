<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_bnadaptiveprofiles_profile = 1
');

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][] = 'Tx_BnAdaptiveProfiles_Service_FrontendService->includeAdapativeProfilesInPageRenderer';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_page.php']['addEnableColumns'][] = 'Tx_BnAdaptiveProfiles_Service_FrontendService->processEnableFieldsForAdaptiveProfiles';

if (TYPO3_MODE === 'FE') {
	require_once(t3lib_extMgm::extPath('bn_adaptiveprofiles') . 'Classes/Service/ProfileService.php');
}
?>