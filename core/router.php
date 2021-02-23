<?php
namespace app\core;
class router_class
{

    public $routes = [

        'GET' => [],
        'POST' => []

    ];

    public static function load_function($file)
    {
        $router = new static;
        require_once $file;
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct_function($uri, $requestType)
    {
//        die(var_dump($uri, $requestType));
        if (array_key_exists($uri, $this->routes[$requestType])) {
//            return $this->routes[$requestType][$uri];

            return $this->callAction_function(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }


        throw new \Exception("no routes defined for this uri");
    }

    protected function callAction_function($controller, $action)
    {
$controller = "app\\controllers\\{$controller}";
        $controller = new $controller;
//        die(var_dump($controller,$action));
        if (!method_exists($controller, $action)) {
            throw new \Exception("{$controller} does not respond to the  {$action} action");
        }
//        return (new $controller)->$action();
        return $controller->$action();
    }
}