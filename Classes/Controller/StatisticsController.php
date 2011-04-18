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
 * Controller for the Statistics object
 */
class Tx_Randombanners_Controller_StatisticsController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_Randombanners_Domain_Repository_StatisticsRepository
	 */
	protected $statisticsRepository;

	/**
	 * @var Tx_Aoereferences_Domain_Repository_AgencyRepository
	 */
	protected $agencyRepository;

	/**
	 * @param Tx_Randombanners_Domain_Repository_StatisticsRepository $statisticsRepository
 	 * @return void
	 */
	public function injectStatisticsRepository(Tx_Randombanners_Domain_Repository_StatisticsRepository $statisticsRepository) {
		$this->statisticsRepository = $statisticsRepository;
	}


	/**
	 * @param Tx_Aoereferences_Domain_Repository_AgencyRepository $agencyRepository
 	 * @return void
	 */
	public function injectAgencyRepository(Tx_Aoereferences_Domain_Repository_AgencyRepository $agencyRepository) {
		$this->agencyRepository = $agencyRepository;
	}


	/**
	 * Displays all Statistics
	 *
	 * @return void
	 */
	public function listAction() {
		$agencies = $this->agencyRepository->findAll();
		$this->view->assign('agencies', $agencies);
	}


}
?>