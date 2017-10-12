<?php

require_once("app/Mage.php");
Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set("display_error", 1 );
umask(0);
Mage::app();

//create a category
$category = Mage::getModel("zangirolami_news/category");
$category->setCode("ThinkOpen 3 ")
         ->setName("ThinkOpen 3")
         ->setStatus(true)
         ->save();