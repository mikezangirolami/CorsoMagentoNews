<?php
/**
 * Zangirolami News
 */

/**
 * Zangirolami News Controller
 *
 * Stories Controller
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Zangirolami_News_ListController extends Mage_Core_Controller_Front_Action {

    /**
     * indexAction
     */
    public function indexAction(){
        $this->loadLayout();
        $this->renderLayout();
    }
}