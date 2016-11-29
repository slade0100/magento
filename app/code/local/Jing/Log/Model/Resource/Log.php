<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/29
 * Time: 9:31
 */
class Jing_Log_Model_Resource_Log extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        // TODO: Implement _construct() method.
        $this->_init('log/log','log_id');
    }
    public function getActiveLog()
    {
        $adapter = $this->getReadConnection();
        $select =$adapter->select()
            ->from($this->getMainTable())
            ->where('ststus = ?', 1);
        return $adapter->fetchAll($select);
    }

    public function viewAction()
    {
        $resource = Mage::getSingleton('core/resource');
        $read = $resource->getConnection('core_read');
        $logTable = $resource->getTableName('log');

        $select = $read->select()
            ->from($logTable, array('log_id','filename','title',
                'content','ststus','update_time'))
            ->whewe('status', 1)
            ->order('created_time DESC');
        $result = $read->fetchRow($select);
        return $result;
    }

    public function getLog()
    {
        $adapter = $this->getReadConnection();
        $select = $adapter->select()
            ->from(
                $this->getTable('log/log'),
                array('log_id', 'title', 'filename', 'content', 'status')
            )
            ->where('status',1);
        $result = $adapter->fetchAll($select);
        return $result;
    }
}
?>