<?php

namespace App\Tools;

class URLHelper
{
    public static $params = [];

    function __construct()
    {
    }

    public static function Params()
    {
        parse_str($_SERVER['QUERY_STRING'], self::$params);
        return self::$params;
    }
}
