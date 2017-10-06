<?php
/**
 * Zangirolami News
 */

/**
 * Zangirolami News Installer
 *
 * MySQL installer.
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.2.0
 * @package cms
 */

/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();

// prepare table for zangirolami_news_story
$tableStory = $installer->getConnection()->newTable($installer->getTable("zangirolami_news/story"));

$tableStory->addColumn(
    "story_id", // name of the column(campo)
    Varien_Db_Ddl_Table::TYPE_INTEGER, //Type of the column
    null, //size: it isn't set
    array("primary" => true, "identity" => true, "nullable" => false), //primary: set as primary key, identity: set as auto_increment, nullable: in this case it can't be null
    "Story ID" //comment of the table
)->addColumn(
    "title", // name of the column(campo)
    Varien_Db_Ddl_Table::TYPE_TEXT, //Type of the column
    256, //size
    array("nullable" => false), //nullable: in this case it can't be null
    "Story Title" //comment of the table
)->addColumn(
    "content", // name of the column(campo)
    Varien_Db_Ddl_Table::TYPE_TEXT, //Type of the column
    64, //size
    array("nullable" => false), //nullable: in this case it can't be null
    "Story Content" //comment of the table
)->addColumn(
    "status", // name of the column(campo)
    Varien_Db_Ddl_Table::TYPE_BOOLEAN, //Type of the column
    null, //size
    array("nullable" => false), //nullable: in this case it can't be null
    "Story Status" //comment of the table
)->addColumn(
    "category_id", // name of the column(campo)
    Varien_Db_Ddl_Table::TYPE_INTEGER, //Type of the column
    null, //size
    array("nullable" => false), //nullable: in this case it can't be null
    "Category Id" //comment of the table
)->addColumn(
    "created_at", // name of the column(campo)
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP, //Type of the column
    null, //size
    array("default" => Varien_Db_Ddl_Table::TIMESTAMP_INIT),
    "Story Created At" //comment of the table
)->addColumn(
    "updated_at", // name of the column(campo)
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP, //Type of the column
    null, //size
    array("default" => Varien_Db_Ddl_Table::TIMESTAMP_INIT_UPDATE),
    "Story Updated At" //comment of the table
);

// create tables
$installer->getConnection()->createTable($tableStory);

$installer->endSetup();