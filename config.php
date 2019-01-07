<?php
include('_start.php');

$databasemanagar->addConnection([
    'driver'    => 'mysql',
    'host'      => 'fosstreaming.ddns.net',
    'database'  => 'FOS-Streaming',
    'username'  => 'root',
    'password'  => 'satmex113w',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$debug = false;

include('_load.php');
