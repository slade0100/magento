<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/24
 * Time: 10:00
 */
class Jing_Log_Block_log extends Mage_Core_Block_Template
{
    public function _preparelayout()
    {
        return parent::_prepareLayout();
    }

    public function getLog()
    {
        if (Mage::registry('current_log_id')){
            $log = Mage::getModel('log/log')->load(Mage::registry('current_log_id'));
            return $log->getData();
        }
        return null;
    }
    public function getLogList()
    {
        return Mage::getModel('log/log')->getlatestlog();
    }
    function limitCharacter($string, $limit = 20, $suffix = '...')
    {
        $string = strip_tags($string);
        if (strlen($string) < $limit) {
            return $string;
        }
        for ($i = $limit; $i >= 0; $i--) {
            $c = $string[$i];
            if ($c == ' ' OR $c == "\n") {
                return substr($string, 0, $i) . $suffix;
            }
        }
        return substr($string, 0, $limit) . $suffix;
    }

    public function getIndexAction()
    {
        return Mage::getModel('log/log')->getIndexAction();
    }

    public function viewAction()
    {
        return Mage::getModel('log/log')->viewAction();
    }
}
