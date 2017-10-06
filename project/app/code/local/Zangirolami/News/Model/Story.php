<?php
/**
 * Zangirolami News
 */

/**
 * Zangirolami News Model Data
 *
 * Story Model.
 *
 * @method Zangirolami_News_Model_Story getTitle()
 * @method setTitle(string $title)
 * @method Zangirolami_News_Model_Story getContent()
 * @method setContent(string $content)
 * @method Zangirolami_News_Model_Story getStatus()
 * @method setStatus (bool $status)
 * @method Zangirolami_News_Model_Story getCategoryId()
 * @method setCategoryId (int $categoryId)
 * @method Zangirolami_News_Model_Story getCreatedAt()
 * @method Zangirolami_News_Model_Story getUpdatedAt()
 * @method setUpdateAt(string $updatedAt)
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.2.0
 * @package cms
 */

class Zangirolami_News_Model_Story extends Mage_Core_Model_Abstract {

    /**
     * _construct
     */
    public function _construct(){ //Construct di Variant
        $this->_init("zangirolami_news/story");
    }

    protected function _beforeSave(){
        parent::_beforeSave();
        $this->setUpdateAt(Mage::getSingleton("core/date")->gmtDate());
        return $this;
    }
}