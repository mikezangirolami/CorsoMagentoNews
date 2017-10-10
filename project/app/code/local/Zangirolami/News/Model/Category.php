<?php
/**
 * Zangirolami News
 */

/**
 * Zangirolami News Model Data
 *
 * Category Model.
 *
 * @method Zangirolami_News_Model_Category getCode()
 * @method setCode(string $code)
 * @method Zangirolami_News_Model_Category getName()
 * @method setName(string $name)
 * @method Zangirolami_News_Model_Category getStatus()
 * @method setStatus (bool $status)
 * @method Zangirolami_News_Model_Category getCreatedAt()
 * @method Zangirolami_News_Model_Category getUpdatedAt()
 * @method setUpdateAt(string $updatedAt)
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.2.0
 * @package cms
 */

class Zangirolami_News_Model_Category extends Mage_Core_Model_Abstract {

    /**
     * $_eventPrefix
     * @var string
     */
    protected $_eventPrefix = "zangirolami_news_category";  //setta evento di salvataggio della tabella nell'observer

    /**
     * $_eventObject
     * @var string
     */
    protected $_eventObject = "category"; //setta nell'observer "category" come nome dell'oggetto

    /**
     * _construct
     */
    protected function _construct(){ //Construct di Variant
        $this->_init("zangirolami_news/category");
    }

    /**
     * _beforeSave
     * @return $this
     */
    protected function _beforeSave(){
        parent::_beforeSave();
        $this->setUpdateAt(Mage::getSingleton("core/date")->gmtDate());
        return $this;
    }
}