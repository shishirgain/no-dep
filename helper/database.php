<?php
use App\Models\Helper\Connection;

$dbname = $env['DB_NAME'];
$servername = $env['DB_SERVER'];
$username = $env['DB_USER'];
$password = $env['DB_PASSWORD'];

$db_connontion =  new Connection($dbname, $servername, $username, $password);
