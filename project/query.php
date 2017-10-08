<?php

require_once("app/Mage.php");
Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set("display_error", 1 );
umask(0);
Mage::app();

//create a category
$category = Mage::getModel("zangirolami_news/category");
$category->setCode("ThinkOpen")
         ->setName("ThinkOpen")
         ->setStatus(true)
         ->save();

echo "<hr>Hi<hr><pre>";
Zend_Debug::dump($category);
