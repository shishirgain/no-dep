<?php

use Dep\router\Router;

include_once __DIR__ . '/../router/api.php';
include_once __DIR__ . '/../router/web.php';

$current_route = Router::get_current_routes();

if ($current_route === null) {
    VIEW('Error404');
} else {
    call_user_func($current_route->get_handler(), ...$current_route->get_params());
}
exit();