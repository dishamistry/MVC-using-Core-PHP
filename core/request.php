<?php
namespace app\core;
class request_class
{

    public static function uri_function()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

}