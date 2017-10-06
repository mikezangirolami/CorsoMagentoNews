<?php
/**
 * Zangirolami News
 */

/**
 * Zangirolami News Installer
 *
 * MySQL installer.
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package cms
 */

/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();

// prepare table for zangirolami_news_category
$tableCategory = $installer->getConnection()->newTable($installer->getTable("zangirolami_news/category"));

$tableCategory->addColumn(
    "category_id", // name of the column(campo)
    Varien_Db_Ddl_Table::TYPE_INTEGER, //Type of the column
    null, //size: it isn't set
    array("primary" => true, "identity" => true, "nullable" => false), //primary: set as primary key, identity: set as auto_increment, nullable: in this case it can't be null
    " ID" //comment of the table
)->addColumn(
    "code", // name of the column(campo)
    Varien_Db_Ddl_Table::TYPE_TEXT, //Type of the column
    64, //size
    array("nullable" => false), //nullable: in this case it can't be null
    "Category Code" //comment of the table
)->addColumn(
    "name", // name of the column(campo)
    Varien_Db_Ddl_Table::TYPE_TEXT, //Type of the column
    64, //size
    array("nullable" => false), //nullable: in this case it can't be null
    "Category Name" //comment of the table
)->addColumn(
    "status", // name of the column(campo)
    Varien_Db_Ddl_Table::TYPE_BOOLEAN, //Type of the column
    null, //size
    array("nullable" => false), //nullable: in this case it can't be null
    "Category Status" //comment of the table
)->addColumn(
    "created_at", // name of the column(campo)
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP, //Type of the column
    null, //size
    array("default" => Varien_Db_Ddl_Table::TIMESTAMP_INIT),
    "Category Created At" //comment of the table
)->addColumn(
    "updated_at", // name of the column(campo)
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP, //Type of the column
    null, //size
    array("default" => Varien_Db_Ddl_Table::TIMESTAMP_INIT_UPDATE),
    "Category Updated At" //comment of the table
);

// create tables
$installer->getConnection()->createTable($tableCategory);

$installer->endSetup();
