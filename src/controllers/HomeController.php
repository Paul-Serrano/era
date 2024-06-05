<?php

namespace Src\Controllers;

use Src\Models\User;

class HomeController
{
    public function index()
    {
        // Obtenez des données du modèle
        $userModel = new User();
        $users = $userModel->getAllUsers();

        // Chargez la vue
        ob_start();
        require '../views/header.php';
        require '../views/home.php';
        require '../views/footer.php';
        return ob_get_clean();
    }
}
