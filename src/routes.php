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
require_once __DIR__ . '/../src/controllers/PanelUserController.php';
require_once __DIR__ . '/../src/controllers/AccountController.php';
require_once __DIR__ . '/../src/controllers/NewsletterController.php';

use Src\Controllers\AccountController;
use Src\Controllers\HomeController;
use Src\Controllers\AdminController;
use Src\Controllers\BlogController;
use Src\Controllers\CartController;
use Src\Controllers\LoginController;
use Src\Controllers\NewsletterController;
use Src\Controllers\OfferController;
use Src\Controllers\SigninController;
use Src\Controllers\SignoutController;
use Src\Controllers\PanelUserController;

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
    case '/article':
        $controller = new BlogController();
        echo $controller->viewArticle($_GET['id']);
        break;
    case '/feature':
        $controller = new PanelUserController();
        echo $controller->viewFeature($_GET['id']);
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
        $controller = new AdminController();
        echo $controller->saveTag($_POST);
        break;
    case '/deleteTag': 
        $controller = new AdminController();
        echo $controller->deleteTag($_POST);
        break;
    case '/saveArticle': 
        $controller = new AdminController();
        $controller->saveArticle($_POST);
        break;
    case '/deleteArticle': 
        $controller = new AdminController();
        echo $controller->deleteArticle($_POST);
        break;
    case '/updateArticle': 
        $controller = new AdminController();
        echo $controller->updateArticle($_POST);
        break;
    case '/saveFeature': 
        $controller = new AdminController();
        echo $controller->saveFeature($_POST);
        break;
    case '/updateFeature': 
        $controller = new AdminController();
        echo $controller->updateFeature($_POST);
        break;
    case '/getFeature': 
        $controller = new PanelUserController();
        echo $controller->subscribeFeature($_POST);
        break;
    case '/panelUser':
        $controller = new PanelUserController();
        echo $controller->index();
        break;
    case '/account':
        $controller = new AccountController();
        echo $controller->index();
        break;
    case '/updateUser':
        $controller = new AccountController();
        echo $controller->updateUser();
        break;
    case '/subscribeNewsletter':
        $controller = new NewsletterController();
        echo $controller->activate();
        break;
    case '/deleteNewsletter':
        $controller = new NewsletterController();
        echo $controller->delete();
        break;
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
