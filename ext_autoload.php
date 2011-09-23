<?php

$extensionPath = t3lib_extMgm::extPath('fb_less');
return array(
	'tx_fbless_compiler' => $extensionPath.'lib/class.tx_fbless_compiler.php',
	'tx_fbless_lessc' => $extensionPath.'lib/class.tx_fbless_lessc.php'
);

?>