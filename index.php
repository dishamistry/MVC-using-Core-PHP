<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';
require_once 'core/bootstrap.php';

use app\core\router_class;
use app\core\request_class;
//***OR in php7***
//use app\core\{router_class,request_class};

router_class::load_function('app/routes.php')
    ->direct_function(request_class::uri_function(),request_class::method());
//***OR***
//$router = router_class::load('routes.php');
//require $router->direct($uri);