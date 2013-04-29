<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$TCA['tx_bnadaptiveprofiles_profile'] = array(
	'ctrl' => array(
		'title'     => 'LLL:EXT:bn_adaptiveprofiles/Resources/Private/Language/locallang_db.xlf:tx_bnadaptiveprofiles_profile',
		'label'     => 'name',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY name',
		'delete' => 'deleted',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Profile.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/profile.gif',
		'rootLevel' => 1
	),
);

$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['bn_adaptiveprofiles']);
$filterContentElementsByProfile = (array_key_exists('filterContentElementsByProfile', $extConf)) ? $extConf['filterContentElementsByProfile'] : TRUE;
if ($filterContentElementsByProfile) {
	if (version_compare(TYPO3_branch, '6.1', '<')) {
		\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('tt_content');
	}
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', array(
		'bn_adaptiveprofiles' => array(
			'exclude' => TRUE,
			'label' => 'LLL:EXT:bn_adaptiveprofiles/Resources/Private/Language/locallang_db.xlf:tt_content.only_show_in_profiles',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_bnadaptiveprofiles_profile',
				'foreign_table_where' => 'ORDER BY minimum_width, name',
				'items' => array(),
				'maxitems' => '999',
				'size' => '5'
			)
		)
	));
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'access', '--linebreak--, bn_adaptiveprofiles');
}

?>