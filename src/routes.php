<?php

use Src\Controllers\HomeController;

$requestUri = $_SERVER['REQUEST_URI'];

switch ($requestUri) {
    case '/':
        $controller = new HomeController();
        echo $controller->index();
        break;
    // Ajoutez d'autres routes ici
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
