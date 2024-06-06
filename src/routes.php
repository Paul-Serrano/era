<?php

require_once __DIR__ . '/../src/controllers/HomeController.php';
require_once __DIR__ . '/../src/controllers/AdminController.php';

use Src\Controllers\HomeController as HomeController;
use Src\Controllers\AdminController as AdminController;


$requestUri = $_SERVER['REQUEST_URI'];

switch ($requestUri) {
    case '/':
        $controller = new HomeController();
        echo $controller->index();
        break;
    case '/admin':
        $controller = new AdminController();
        echo $controller->index();
        break;
    case '/test':
        var_dump('test');
        break;
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
