<?php

require_once __DIR__ . '/../src/controllers/HomeController.php';
require_once __DIR__ . '/../src/controllers/AdminController.php';
require_once __DIR__ . '/../src/controllers/BlogController.php';
require_once __DIR__ . '/../src/controllers/OfferController.php';
require_once __DIR__ . '/../src/controllers/CartController.php';

use Src\Controllers\HomeController;
use Src\Controllers\AdminController;
use Src\Controllers\BlogController;
use Src\Controllers\CartController;
use Src\Controllers\OfferController;

$requestUri = $_SERVER['REQUEST_URI'];

switch ($requestUri) {
    case '/':
        $controller = new HomeController();
        echo $controller->index();
        break;
    case '/admin':
        $controller = new AdminController($requestUri);
        echo $controller->index();
        break;
    case '/admin/update': 
        $controller = new AdminController($requestUri);
        echo $controller->index();
        break;
    case '/admin/update/general': 
        $controller = new AdminController($requestUri);
        echo $controller->index();
        break;
    case '/admin/update/blog': 
        $controller = new AdminController($requestUri);
        echo $controller->index();
        break;
    case '/blog':
        $controller = new BlogController();
        echo $controller->index();
        break;
    case '/offer':
        $controller = new OfferController();
        echo $controller->index();
        break;
    case '/cart':
        $controller = new CartController();
        echo $controller->index();
        break;
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
