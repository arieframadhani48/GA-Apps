<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;dbname=myDB',
    'username' => 'postgres',
    'password' => 'adalah83',
    'charset' => 'utf8',
    'schemaMap' => [
                'pgsql' => [
                  'class' => 'yii\db\pgsql\Schema',
                  'defaultSchema' => 'warehouse' //specify your schema here, public is the default schema
                ]
    ]
    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
