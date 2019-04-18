<?php
//pgsql:host=localhost;port=5432;dbname=SAES;user=postgres;password=12345
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;dbname=SAES',
    'username' => 'postgres',
    'password' => '12345',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
