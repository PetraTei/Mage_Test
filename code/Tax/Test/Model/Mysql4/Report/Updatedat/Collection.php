<?php

/**
 @package     Mage_Test
 @subpackage  Tax
 @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
class Mage_Tax_Test_Model_Mysql4_Report_Updatedat_Collection extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Tax_Model_Mysql4_Report_Updatedat_Collection
     */
    protected $_model = null;

    protected function setUp()
    {
        $this->_model = Mage::getModel('Mage_Tax_Model_Mysql4_Report_Updatedat_Collection');
    }

    protected function tearDown()
    {
        $this->_model = null;
    }
}