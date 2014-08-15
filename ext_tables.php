<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$configuration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
	$_EXTKEY, 'Configuration/TypoScript/', 't3onepage'
);

/**
 * Add page TSConfig
 */
if ($configuration['addPageTSConfig'] == TRUE) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TSconfig/Page.txt">'
	);
}

/**
 * Add user TSConfig
 */
if ($configuration['addUserTSConfig'] == TRUE) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
		'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TSconfig/User.txt">'
	);
}
