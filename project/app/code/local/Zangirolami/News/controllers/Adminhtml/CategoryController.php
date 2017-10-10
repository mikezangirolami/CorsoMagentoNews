<?php
/**
 * Zangirolami News
 */

/**
 * Zangirolami News Adminhtml Controller
 * Backend Category Controller
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Zangirolami_News_Adminhtml_CategoryController extends Mage_Adminhtml_Controller_Action {

    /**
     * indexAction
     */
    public function indexAction(){
        echo "eccomi"; die();
    }

    /**
     * _isAllowed
     * @return bool
     */
    protected function _isAllowed(){
        return Mage::getSingleton("admin/session")->isAllowed("zangirolami_news");
    }
}