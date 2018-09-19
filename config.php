<?php
include('_start.php');

$databasemanagar->addConnection([
    'driver'    => 'mysql',
    'host'      => 'sql103.unaux.com',
    'database'  => 'unaux_22646895_iptv11',
    'username'  => 'unaux_22646895',
    'password'  => 'satmex113w',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$debug = false;

include('_load.php');
