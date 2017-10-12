<?php
/**
 * Zangirolami News
 */

/**
 * Zangirolami News Adminhtml Edit Block
 *
 * Backend Category Controller
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Zangirolami_News_Block_Adminhtml_Category_Edit extends Mage_Adminhtml_Block_Widget_Form_Container {

    /**
     * Zangirolami_News_Block_Adminhtml_Category_Edit constructor.
     */
    public function __construct(){
        $this->_objectId = "category_id";
        $this->_blockGroup = "zangirolami_news";
        $this->_controller = "adminhtml_category";

        parent::__construct();
    }

    /**
     * @return string
     */
    public function getHeaderText(){
        return $this->__("Category Details");
    }

}