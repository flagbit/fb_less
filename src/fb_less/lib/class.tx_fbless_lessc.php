<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Frederic Gaus <gaus@flagbit.de>, Flagbit GmbH & Co. KG
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

require_once (t3lib_extmgm::extPath('fb_less').'lib/less/lessc.inc.php');

/**
 * Fb Less Compiler
 *
 * @package fb_less
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class tx_fbless_lessc extends lessc {
	var $prefixId = 'tx_fbless'; // Same as class name
	var $scriptRelPath = 'lib/class.tx_fbless_lessc.php'; // Path to this script relative to the extension dir.
	var $extKey = 'fb_less'; // The extension key.
	
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/fb_less/lib/class.tx_fbless_lessc.php']) {
	include_once ($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/fb_less/lib/class.tx_fbless_lessc.php']);
}

?>
