<?php

$installer = $this;
$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($installer->getTable('log/log'))
    ->addColumn('log_id',
        Varien_Db_Ddl_Table::TYPE_INTEGER,
        null,
        array(
            'identity' => true,
            'unsigned' => true,
            'nullable' => false,
            'primary' => true,
            ),'Log Id')
    ->addColumn('title',
        Varien_Db_Ddl_Table::TYPE_VARCHAR,
        255,
        array(
            'nullable' => false,
            'default' => '',
        ),'Title')
    ->addcolumn('filename',
        Varien_Db_Ddl_Table::TYPE_VARCHAR,
        null,
        array(
            'nullable' => false,
            'default' => '',
        ),'Filename')
    ->addColumn('content',
        Varien_Db_Ddl_Table::TYPE_TEXT,
        null,
        array(
            'nullable' => false,
            'default' => '',
        ),'Content')
    ->addColumn('status',
        Varien_Db_Ddl_Table::TYPE_SMALLINT,
        6,
        array(
            'nullable' => false,
            'default' => 0,
        ),'Status')
    ->addColum('created_time',
        Varien_Db_Ddl_Table::TYPE_DATETIME,
        null,
        array(),'Created Time')
    ->addColumn('updated_time',
        Varien_Db_Ddl_Table::TYPE_DATETIME,
        null,
        array(),
        'Update Time'
    )->setComment('Log Table');
$installer->getConnection()->createTable($table);
$installer->endSetup();
?>