<?php

if (! defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
$GLOBALS['TYPO3_CONF_VARS']['DB']['database'] = 'website_camemis';
$GLOBALS['TYPO3_CONF_VARS']['DB']['host'] = '127.0.0.1';
$GLOBALS['TYPO3_CONF_VARS']['DB']['username'] = 'root';
$GLOBALS['TYPO3_CONF_VARS']['DB']['password'] = '';


## Reset sitename to your system
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = 'camemis_website';

## Install Tool password is '123456789'
$GLOBALS['TYPO3_CONF_VARS']['BE']['installToolPassword'] = '$P$COrve2efDTCKy3X3Vd6cd4Q/WNEvsr0';


    $GLOBALS['TYPO3_CONF_VARS']['SYS']['clearCacheSystem'] = TRUE;
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['sqlDebug'] = TRUE;
	  $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = TRUE;
    $GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = TRUE;
