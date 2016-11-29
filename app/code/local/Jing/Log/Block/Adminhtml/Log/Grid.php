<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/29
 * Time: 11:13
 */
class Jing_News_Model_Resource_News_Log_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public  function _construct()
    {
        parent::_construct();
        $this->_init('log/log');
    }
}