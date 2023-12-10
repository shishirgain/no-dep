<?php
$GLOBALS['env'] = parse_ini_file('.env');
include_once __DIR__ . "/../dep/helper/Loader.php";
include_once __DIR__ . "/../dep/helper/Database.php";

$dbname = $env['DB_NAME'];
$servername = $env['DB_SERVER'];
$username = $env['DB_USER'];
$password = $env['DB_PASSWORD'];

$GLOBALS['db_connection'] = Database::connect($dbname, $servername, $username, $password);

Loader::loadFolder(__DIR__ . '/../app/Tools');
Loader::loadFolder(__DIR__ . '/../app/Models');
Loader::loadFolder(__DIR__ . '/../app/Controller');
