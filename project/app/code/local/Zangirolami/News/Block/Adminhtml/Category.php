<?php
/**
* Zangirolami News
*/

/**
* Zangirolami News Category Block
* Adminhtml block for category grid
* @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
* @version 0.2.0
* @package Cms
*/

class Zangirolami_News_Block_Adminhtml_Category extends Mage_Adminhtml_Block_Widget_Grid_Container {

    /**
     * Zangirolami_News_Block_Adminhtml_Category constructor
     */
    public function __construct(){
        $this->_blockGroup = "zangirolami_news"; //quale sarà il gruppo di block da utilizzare
        $this->_controller = "adminhtml_category"; //quale controller sarà utilizzato
        $this->_headerText = $this->__("News Categories");
        parent::__construct();
    }
}