<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Flagbit CSS Less Compiler',
	'description' => 'Generate CSS with LESS and lessphp',
	'category' => 'misc',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => 'typo3temp/fb_less/',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author' => 'Frederic Gaus',
	'author_email' => 'gaus@flagbit.de',
	'author_company' => 'Flagbit GmbH & Co. KG',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' =>  'a:8:{s:9:"ChangeLog";s:4:"da15";s:16:"ext_autoload.php";s:4:"8cfe";s:21:"ext_conf_template.txt";s:4:"f33d";s:12:"ext_icon.gif";s:4:"04d2";s:17:"ext_localconf.php";s:4:"8057";s:32:"lib/class.tx_fbless_compiler.php";s:4:"30c9";s:29:"lib/class.tx_fbless_lessc.php";s:4:"dcee";s:22:"lib/less/lessc.inc.php";s:4:"551b";}',
	'suggests' => array(
	),
);

?>