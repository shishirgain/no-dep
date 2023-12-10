<?php
use App\Controller\UserController;
use App\Controller\CategoryController;
use App\Controller\PostController;

use App\Tools\Router;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);
$requestMethod = $_SERVER["REQUEST_METHOD"];

// users
if ($uri[2] === 'users') {
    $id = null;
    if (isset($uri[3])) {
        $id = (int) $uri[3];
    }
    $controller = new UserController($db_connontion->get_connection(), $requestMethod, $id);
    $controller->processRequest();
}

// categories
if ($uri[2] === 'categories') {
    $id = null;
    if (isset($uri[3])) {
        $id = (int) $uri[3];
    }
    $controller = new CategoryController($db_connontion->get_connection(), $requestMethod, $id);
    $controller->processRequest();
}

// posts
if ($uri[2] === 'posts') {
    $id = null;
    if (isset($uri[3])) {
        $id = (int) $uri[3];
    }
    $controller = new PostController($db_connontion->get_connection(), $requestMethod, $id);
    $controller->processRequest();
}

// route not found
$response['status_code_header'] = '"HTTP/1.1 404 Not Found"';
$response['body'] = json_encode([
    'url' =>  $_SERVER['REQUEST_URI'],
    'message' => 'not found'
]);
echo $response['body'];
exit();
