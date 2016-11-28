<?php

class Jing_Log_Block_Adminhtml_Log_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
        $this->_objectId = 'id';
        $this->_blockGroup = 'log';
        $this->_controller = 'adminhtml_log';
        $this->_updateButton('save', 'label', Mage::helper('log')->__('save Log'));
        $this->_updateButton('delete', 'label', Mage::helper('log')->__('Delete Log'));
        $this->_addButton('saveendcontinue',
            array('label' => Mage::helper('adminhtml')->__('Save And Continue Edit'),
                'onclick' => 'saveAndContinueEdit()', 'class' => 'save',), -100);
        $this->_formScripts[] = "function toggleEditor() {
            if (tinyMCE . getInstanceById('news_content') == null) {
                tinyMCE . execCommand('mceAddControl', false, 'news_content');
            } else {
                tinyMCE . execCommand('mceRemoveControl', false, 'news_content');
}
        }
function saveAndContinueEdit()
{
editForm . submit($('edit_form') . action + 'back/edit/');
}
 ";
    }

    public function getHeaderText()
    {
        if (Mage::register('log_data') && Mage::registry('log_data')->getId()) {
            return Mage::helper('log')->__("Edit Item '%s'",
            $this->htmlEscape(Mage::registery('log_data')->getTitle()));
        } else {
            return Mage::helper('news')->__('Add Item');
        }
    }
}