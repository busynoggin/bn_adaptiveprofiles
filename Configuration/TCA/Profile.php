<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_bnadaptiveprofiles_profile'] = array(
	'ctrl' => $TCA['tx_bnadaptiveprofiles_profile']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'name,minimum_width,maximum_width,is_default_profile'
	),
	'feInterface' => $TCA['tx_bnadaptiveprofiles_profile']['feInterface'],
	'columns' => array(
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bn_adaptiveprofiles/Resources/Private/Language/locallang_db.xlf:tx_bnadaptiveprofiles_profile.name',
			'config' => array(
				'type' => 'input',
				'size' => '30',
				'eval' => 'required,nospace,uniqueInPid',
			)
		),
		'minimum_width' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bn_adaptiveprofiles/Resources/Private/Language/locallang_db.xlf:tx_bnadaptiveprofiles_profile.minimum_width',
			'config' => array(
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array(
					'upper' => '999999',
					'lower' => '0'
				),
				'default' => 0
			)
		),
		'maximum_width' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bn_adaptiveprofiles/Resources/Private/Language/locallang_db.xlf:tx_bnadaptiveprofiles_profile.maximum_width',
			'config' => array(
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array(
					'upper' => '99999',
					'lower' => '0'
				),
				'default' => 0
			)
		),
		'is_default_profile' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bn_adaptiveprofiles/Resources/Private/Language/locallang_db.xlf:tx_bnadaptiveprofiles_profile.is_default_profile',
			'config' => array(
				'type' => 'check',
			)
		),
	),
	'types' => array(
		'0' => array('showitem' => 'name;;;;1-1-1, minimum_width, maximum_width, is_default_profile')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	)
);
?>