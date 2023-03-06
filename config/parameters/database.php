<?php

return [

    /*
    |---------------------------------------------------------------------
    |                     Available connections :
    |              [ mysql, sqlite, pgsql, oracle (oci) ]
    |---------------------------------------------------------------------
    */
    'connection' => 'pdo_mysql',
    'pdo_sqlite' => [
        'driver'     => 'sqlite',
        'database'   => 'data.db',
    ],
    'pdo_mysql' => [
        'driver'     => 'mysql',
        'database'   => 'Laventure',
        'host'       => '127.0.0.1',
        'port'       => '3306',
        'username'   => 'brown',
        'password'   => 'secret123456',
        'collation'  => 'utf8_unicode_ci',
        'charset'    => 'utf8',
        'prefix'     => '', // 5ksfsgeteyru_
        'engine'     => 'InnoDB', // MyISAM
        'options'    => [],
    ],
    'pdo_pgsql' => [
        'driver'     => 'pgsql',
        'database'   => 'Laventure',
        'host'       => '127.0.0.1',
        'port'       => '5432',
        'username'   => 'postgres',
        'password'   => '123456',
        'collation'  => 'utf8_unicode_ci',
        'charset'    => 'utf8',
        'prefix'     => '', // 5ksfsgeteyru_
        'options'    => [],
    ]
];