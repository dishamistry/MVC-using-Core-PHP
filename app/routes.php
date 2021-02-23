<?php

$router->get('', 'pages_controller_class@home_function');
$router->get('about', 'pages_controller_class@about_function');
$router->get('contact', 'pages_controller_class@contact_function');
//$router->post('names','pages_controller_class@home_function');

$router->get('', 'user_controller_class@index_function');
$router->post('users', 'user_controller_class@store_function');

//var_dump($router->routes);