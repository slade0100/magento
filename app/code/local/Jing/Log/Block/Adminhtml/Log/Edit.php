<?php

class Jing_Log_Block_Adminhtml_Log_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
        $this->_objectId = 'id';
        $this->_blockGroup = 'log';
        $this->_controller = 'adminhtml_log';
        
    }
}