<?php
$url = $_SERVER['REQUEST_URI'];
$pattern = "/(\/api\/)\w+/";

if(preg_match($pattern, $url)){
    include_once __DIR__ . '/../router/api.php';
    exit();
}

include_once __DIR__.'/../layouts/default.php';