<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Thomas Loeffler <loeffler@spooner-web.de>
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

/**
 * Statistics for clicking and displaying banners
 */
class Tx_Randombanners_Domain_Model_Statistics extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * displayedThisMonth
	 *
	 * @var integer
	 */
	protected $displayedThisMonth;

	/**
	 * clickedThisMonth
	 *
	 * @var integer
	 */
	protected $clickedThisMonth;

	/**
	 * displayedLastMonth
	 *
	 * @var integer
	 */
	protected $displayedLastMonth;

	/**
	 * clickedLastMonth
	 *
	 * @var string
	 */
	protected $clickedLastMonth;

	/**
	 * @param integer $displayedThisMonth
	 * @return void
	 */
	public function setDisplayedThisMonth($displayedThisMonth) {
		$this->displayedThisMonth = $displayedThisMonth;
	}

	/**
	 * @return integer
	 */
	public function getDisplayedThisMonth() {
		return $this->displayedThisMonth;
	}

	/**
	 * @param integer $clickedThisMonth
	 * @return void
	 */
	public function setClickedThisMonth($clickedThisMonth) {
		$this->clickedThisMonth = $clickedThisMonth;
	}

	/**
	 * @return integer
	 */
	public function getClickedThisMonth() {
		return $this->clickedThisMonth;
	}

	/**
	 * @param integer $displayedLastMonth
	 * @return void
	 */
	public function setDisplayedLastMonth($displayedLastMonth) {
		$this->displayedLastMonth = $displayedLastMonth;
	}

	/**
	 * @return integer
	 */
	public function getDisplayedLastMonth() {
		return $this->displayedLastMonth;
	}

	/**
	 * @param string $clickedLastMonth
	 * @return void
	 */
	public function setClickedLastMonth($clickedLastMonth) {
		$this->clickedLastMonth = $clickedLastMonth;
	}

	/**
	 * @return string
	 */
	public function getClickedLastMonth() {
		return $this->clickedLastMonth;
	}

}
?>