<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');


$GLOBALS['TYPO3_CONF_VARS']['SYS']['textfile_ext'] .= ',less';
$GLOBALS['TYPO3_CONF_VARS']['FE']['cssCompressHandler'] = 'EXT:fb_less/lib/class.tx_fbless_compiler.php:tx_fbless_compiler->compile';
