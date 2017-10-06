<?php
/**
 * Zangirolami News
 */

/**
 * Zangirolami News Model Resource Story Collection
 *
 * Story Resource Collection Model.
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.2.0
 * @package cms
 */

class Zangirolami_News_Model_Resource_Story_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {

    /**
     * _construct
     */
    public function _construct(){ //Construct di Variant
        $this->_init("zangirolami_news/story");
    }
}