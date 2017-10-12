<?php
/**
* Zangirolami News
*/

/**
* Zangirolami News Status Model
 *
* Options to Status
* @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
* @version 0.2.0
* @package Cms
*/

class Zangirolami_News_Model_Source_Status {

    /**
     * toOptionArray
     * @return array
     */
    public function toOptionArray(){ //si usa per i select nei form
        return array(
            array("value" => 0, "label" => Mage::helper("zangirolami_news")->__("Disabled")),
            array("value" => 1, "label" => Mage::helper("zangirolami_news")->__("Enabled"))
        );
    }

    /**
     * toGridArray
     * @return array
     */
    public function toGridArray(){ //si usa per i select nella griglia
        $array = array();
        foreach ($this->toOptionArray() as $option){
            $array[$option['value']] = $option['label'];
        }
        return $array;
    }

}