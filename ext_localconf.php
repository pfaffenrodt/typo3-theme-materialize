<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
/***************
 * Make the extension configuration accessible
 */
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
}

// PageTS
if ($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]['usePageTSconfig']) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/PageTS/pageTSconfig.txt">'
    );
}
// TCEFORM
if ($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]['useTCEconfig']) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/PageTS/TCEFORM.txt">'
    );
}
// UserTS
if ($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]['setUserTSconfig']) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/UserTS/userTSconfig.txt">'
    );
}

/***************
 * Reset extConf array to avoid errors
 */
if (is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] = serialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
}

if ((float)TYPO3_version >= 7.0) { // bugfix for inline fal images in flexforms (only after record with flexform has been saved)
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['inlineParentRecord'][\TYPO3\CMS\Backend\Form\FormDataProvider\DatabaseEditRow::class] = array();
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['inlineParentRecord'][\TYPO3\CMS\Backend\Form\FormDataProvider\InitializeProcessedTca::class] = array(
        'depends' => array(
            \TYPO3\CMS\Backend\Form\FormDataProvider\DatabaseEditRow::class,
        )
    );
}