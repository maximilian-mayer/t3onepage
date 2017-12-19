<?php

$newPageColumns = array(
	'css_id' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_id',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'nospace,alphanum_x,lower,unique'
		),
	),
	'css_class' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_class',
		'config' => array(
			'type' => 'select',
			'renderType' => 'selectSingle',
			'items' => array(
				array('LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_class.none', ''),
				array('LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_class.dark-section', 'dark-section'),
				array('LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_class.highlight-section', 'highlight-section'),
				array('LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_class.feature-section', 'feature-section'),
			),
			'size' => 1,
			'maxitems' => 1,
			'eval' => ''
		),
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $newPageColumns);

$GLOBALS['TCA']['pages']['palettes']['t3onepage'] = array(
	'canNotCollapse' => 1,
	'showitem' => 'css_id, css_class'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
	'pages',
	'--palette--;LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.palettes.t3onepage;t3onepage,',
	'',
	'after:layout'
);
