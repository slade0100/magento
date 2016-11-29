<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/29
 * Time: 9:21
 */
class Jing_Log_Model_Status extends Varien_Object
{
    const STATUS_ENABLED = 1;
    const STUTUS_DISADLED = 2;
    static public function getOptionArray() {
        return array(self::STATUS_ENABLED => Mage::helper('log')->__('Enabled'),
            self::STUTUS_DISADLED => Mage::helper('log')->__('Disabled'));
    }
}