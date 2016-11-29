<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/28
 * Time: 11:59
 */
class Jing_Log_Model_News extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('log/log');
    }

    public function getActiveNews()
    {
        return $this->_getResource()->getActiveNews();
    }

    public function getLog()
    {
        return $this->getResource()->getLog();
    }
}