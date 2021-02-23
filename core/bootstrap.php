<?php
use app\core\app_class;
app_class::bind_function('config', require_once 'config.php');

//die(var_dump(app_class::get_function('config')));
////$config =app_class::get('config');

app_class::bind_function('database', new query_builder_class
(connection_class::dbconnect_function
(app_class::get_function('config')['database'])));


function view_function($name,$data = [])
{
    extract($data);
    return require "app/views/{$name}.php";
}

function redirect_function($path)
{
    header("Location:/$path");
}