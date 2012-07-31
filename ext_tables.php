<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$TCA['tx_bnadaptiveprofiles_profile'] = array(
	'ctrl' => array(
		'title'     => 'LLL:EXT:bn_adaptiveprofiles/Resources/Private/Language/locallang_db.xml:tx_bnadaptiveprofiles_profile',
		'label'     => 'name',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY name',
		'delete' => 'deleted',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Profile.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/profile.gif',
	),
);
?>