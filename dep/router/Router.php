<?php

namespace Dep\router;

use Dep\router\Route;

class Router
{
    private static $routes = [];
    private static $query = [];

    public static function get($route, $handler)
    {
        array_push(self::$routes, new Route('GET', $route, $handler));
    }

    public static function post($route, $handler)
    {
        array_push(self::$routes, new Route('POST', $route, $handler));
    }

    public static function put($route, $handler)
    {
        array_push(self::$routes, new Route('PUT', $route, $handler));
    }

    public static function patch($route, $handler)
    {
        array_push(self::$routes, new Route('PATCH', $route, $handler));
    }

    public static function delete($route, $handler)
    {
        array_push(self::$routes, new Route('DELETE', $route, $handler));
    }

    public static function get_routes()
    {
        return self::$routes;
    }

    public static function get_current_routes()
    {
        $uri = parse_url($_SERVER['REQUEST_URI']);
        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $key => $route) {
            $urlArray = explode('/', $uri['path']);
            array_shift($urlArray);

            if (sizeof($urlArray) === sizeof($route->get_url()) && $method === $route->get_method()) {
                $length = sizeof($route->get_url()) - 1;
                foreach ($route->get_url() as $k => $url_item) {
                    if ($url_item !== $urlArray[$k]) {
                        if (strpos($url_item, '{') === 0 && strripos($url_item, '}') === strlen($url_item) - 1) {
                            $route->set_param($urlArray[$k]);
                        } else {
                            continue;
                        }
                    }
                    if ($length === $k) {
                        return $route;
                    }
                }
            }
        }
    }
}
