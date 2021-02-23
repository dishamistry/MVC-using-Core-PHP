<?php
namespace app\core;
class app_class
{
    protected static $registry = [];

    public static function bind_function($key, $value)
    {
        static::$registry[$key] = $value;
    }

    public static function get_function($key)
    {
        if(! array_key_exists($key,static::$registry)){
            throw new Exception("NO {$key} is  bound in container");
        }

        return static::$registry[$key];
    }
}