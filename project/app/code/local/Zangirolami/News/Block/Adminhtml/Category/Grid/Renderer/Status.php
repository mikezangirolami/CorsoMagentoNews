<?php
/**
 * Zangirolami News
 */

/**
 * Zangirolami News Category Grid Status Renderer
 * Status renderer for category grid
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */

class Zangirolami_News_Block_Adminhtml_Category_Grid_Renderer_Status extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract {

    /**
     * render
     *
     * Render status as enabled or disabled
     * @param Varien_Object $row
     * @return string
     */
    public function render(Varien_Object $row){
        if($row->getData("status") == 0) {
            return "<span class='grid-severity-minor'></span>" . $this->__("Disabled") . "</span></span>"; //doppia chiusura </span></span> finale per default Magento
        }
        if($row->getData("status") == 1) {
            return "<span class='grid-severity-notice'></span>" . $this->__("Enabled") . "</span></span>"; //doppia chiusura </span></span> finale per default Magento
        }
        return "<span class='grid-severity-major'></span>" . $this->__("Error") . "</span></span>"; //come se fosse un else, doppia chiusura </span></span> finale per default Magento
    }
}