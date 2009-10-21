<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Dmitry Dulepov <dmitry.dulepov@gmail.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
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

/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * $Id$
 */

/**
 * This class implements a server config for the indexer.
 *
 * @author	Dmitry Dulepov <dmitry.dulepov@gmail.com>
 * @package	TYPO3
 * @subpackage	tx_mnogosearch
 */
class tx_mnogosearch_serverconfig extends tx_mnogosearch_baseconfig {

	/**
	 * Obtains configuration lines ending with chr(10).
	 *
	 * @return string
	 */
	public function getConfigurationLines() {
		$result = 'Server ';
		$result .= $this->getMethodAsString();
		$result .= $this->getSubSection();
		$result .= $this->data['tx_mnogosearch_url'] . chr(10);
	}

	/**
	 * Obtains URls explicitely allowed by this configuration.
	 *
	 * @return	array
	 */
	public function getAllowedServerURLs() {
		$result = array();
		$method = $this->data['tx_mnogosearch_method'];
		if ($method != self::DISALLOW && $method != self::SKIP) {
			$result[] = $this->data['tx_mnogosearch_url'];
		}
		return $result;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mnogosearch/cli/class.tx_mnogosearch_serverconfig.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mnogosearch/cli/class.tx_mnogosearch_serverconfig.php']);
}

?>