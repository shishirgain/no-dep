<?php
function JSON($data)
{
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    echo json_encode($data);
};

function VIEW($data)
{
    include_once(__DIR__ . '/../../client/views/'. $data .'.php');
    exit();
}

function getPrams()
{
    $uri = parse_url($_SERVER['REQUEST_URI']);
    parse_str($uri['query'], $queryArray);
    return $queryArray;
}