<?php

require_once __DIR__ . '/../src/controllers/HomeController.php';
require_once __DIR__ . '/../src/controllers/LoginController.php';
require_once __DIR__ . '/../src/controllers/SigninController.php';
require_once __DIR__ . '/../src/controllers/SignoutController.php';
require_once __DIR__ . '/../src/controllers/AdminController.php';
require_once __DIR__ . '/../src/controllers/BlogController.php';
require_once __DIR__ . '/../src/controllers/OfferController.php';
require_once __DIR__ . '/../src/controllers/CartController.php';
require_once __DIR__ . '/../src/controllers/UserController.php';

use Src\Controllers\HomeController;
use Src\Controllers\AdminController;
use Src\Controllers\BlogController;
use Src\Controllers\CartController;
use Src\Controllers\LoginController;
use Src\Controllers\OfferController;
use Src\Controllers\SigninController;
use Src\Controllers\SignoutController;
use Src\Models\UserController;

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // Pour gérer les paramètres de requête

switch ($requestUri) {
    case '/':
        $controller = new HomeController();
        echo $controller->index();
        break;
    case '/admin':
        $controller = new AdminController();
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
        $controller = new LoginController();
        echo $controller->index();
        break;
    case '/connect': // Ajout de la route de connexion
        $controller = new LoginController();
        echo $controller->login();
        break;
    case '/signin': // Ajout de la route de connexion
        $controller = new SigninController();
        echo $controller->index();
        break;
    case '/register': // Ajout de la route de connexion
        $controller = new SigninController();
        echo $controller->register();
        break;
    case '/signout': // Ajout de la route d'inscription
        $controller = new SignoutController();
        echo $controller->signout();
        break;
    case '/postTag': 
        $controller = new AdminController($requestUri);
        echo $controller->saveTag($_POST);
        break;
    case '/deleteTag': 
        $controller = new AdminController();
        echo $controller->deleteTag($_POST);
        break;
    case '/postArticle': 
        $controller = new AdminController();
        $controller->saveArticle($_POST);
        break;
    case '/deleteArticle': 
        $controller = new AdminController();
        echo $controller->deleteArticle($_POST);
        break;
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
