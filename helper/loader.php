<?php
include_once __DIR__ . "/../dep/helper/FileFolder.php";

function includeFolder($directory)
{
    $items = getFileListFormDirectory($directory, 'php');
    foreach ($items as $item) {
        include_once $item;
    }
}

includeFolder(__DIR__ . '/../app/Tools');
includeFolder(__DIR__ . '/../app/Models');
includeFolder(__DIR__ . '/../app/Controller');