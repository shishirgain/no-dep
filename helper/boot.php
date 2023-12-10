<?php
$GLOBALS['env'] = parse_ini_file('.env');

include_once __DIR__ . '/../app/Models/Helper/Connection.php';
include_once __DIR__ . '/../app/Models/Helper/SQLExecutor.php';

include_once __DIR__ . '/../helper/loader.php';
include_once __DIR__ . '/../helper/database.php';