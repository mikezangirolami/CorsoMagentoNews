<?php

require_once("app/Mage.php");
Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set("display_error", 1 );
umask(0);
Mage::app();

//create a category
//$category = Mage::getModel("zangirolami_news/category");
//$category->setCode("ThinkOpen")
//         ->setName("ThinkOpen")
//         ->setStatus(true)
//         ->save();

//load the category
$category = Mage::getModel("zangirolami_news/category")->load(1);
echo "<hr>Category<hr>";
Zend_Debug::dump($category);
echo "<hr>";

//create a story
$story = Mage::getModel("zangirolami_news/story");
$story->setTitle("La mia storia 2")
         ->setContent("Lorem Ipsum 2")
         ->setStatus(1)
         ->setCategory($category)
         ->save();

echo "<hr>Hi<hr><pre>";
//Zend_Debug::dump($category);
Zend_Debug::dump($story);

echo "<hr>";
echo "Category Name = " . $story ->getCategory()->getName();
echo "<hr>";
