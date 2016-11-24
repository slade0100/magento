<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/24
 * Time: 13:17
 */
class Jing_Log_Block_Adminhtml_Log extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_log';
        $this->_blockGroup = 'log';
        $this->_headerText = Mage::helper('log')->__('Log Manager');
        $this->_addButtonLabel = Mage::helper('log')->__('Add Log');
        parent::__construct();
    }
}