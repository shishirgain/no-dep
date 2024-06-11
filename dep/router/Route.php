<?php

namespace Dep\router;

class Route
{
    private $method;
    private $url;
    private $handler;
    private $params = [];

    public function __construct($method, $url, $handler)
    {
        $this->method = $method;
        $urlArr = explode('/', $url);
        array_shift($urlArr);
        $this->url = $urlArr;
        $this->handler = $handler;
    }

    public function set_param($param)
    {
        array_push($this->params, $param);
    }

    public function get_params()
    {
        return $this->params;
    }
    public function get_method()
    {
        return $this->method;
    }
    public function get_url()
    {
        return $this->url;
    }
    public function get_handler()
    {
        return $this->handler;
    }
}
