<?php

/**
 * Zing Outsourcing Software
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zosoft.net so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * We supply professinal magento support.
 * - Custom Design, for layout, template, skin, style ...
 * - Custom Module, for new featuers, actions, and other custom functions.
 * - Product import/export, for import product from excel file or other online shop.
 * - Other DIY for magento.
 * 
 * @category    ZoSoft
 * @package     Pz_WorldMap
 * 
 * @author      Cheng Wei <cheng.wei@zosoft.net>
 * @version     $$Id: Setup.php 61 2010-04-10 08:13:46Z cwei $$
 * @copyright   Copyright (C) 2010 Z.O. Software, China (http://www.zosoft.net)
 */

/**
 * Customer resource setup model
 * 
 * @package     Pz_WorldMap
 * @author      Cheng Wei <cheng.wei@zosoft.net>
 * @version     $$Id: Setup.php 61 2010-04-10 08:13:46Z cwei $$
 */
class Pz_WorldMap_Model_Entity_Setup extends Mage_Eav_Model_Entity_Setup {
	
	public function getDefaultEntities() {
		return array();
	}

}
