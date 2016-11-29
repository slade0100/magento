<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/24
 * Time: 10:53
 */
class Jing_log_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderlayout();
    }

    public function viewAction()
    {
        $log_id = $this->getRequest()->getParam('id');
        Mage::register('current_log_id', $log_id);
        $this->loadLayout();
        $this->renderLayout();
    }
}