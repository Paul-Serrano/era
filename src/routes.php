<?php

require_once __DIR__ . '/../src/controllers/HomeController.php';
require_once __DIR__ . '/../src/controllers/AdminController.php';
require_once __DIR__ . '/../src/controllers/BlogController.php';
require_once __DIR__ . '/../src/controllers/OfferController.php';
require_once __DIR__ . '/../src/controllers/CartController.php';
require_once __DIR__ . '/../src/controllers/UserController.php';

use Src\Controllers\HomeController;
use Src\Controllers\AdminController;
use Src\Controllers\BlogController;
use Src\Controllers\CartController;
use Src\Controllers\OfferController;
use Src\Models\UserController;

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // Pour gérer les paramètres de requête

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
    case '/login': // Ajout de la route de connexion
        $controller = new UserController();
        echo $controller->login();
        break;
    case '/register': // Ajout de la route d'inscription
        $controller = new UserController();
        echo $controller->register();
        break;
    case '/wrongMethodAdmin': 
        $controller = new AdminController($requestUri);
        echo $controller->index();
        break;
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
