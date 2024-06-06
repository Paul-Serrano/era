<?php

namespace Src\Controllers;

require_once __DIR__ . '/../models/User.php';
use Src\Models\User as User;

class HomeController
{
    public function index()
    {
        // Obtenez des données du modèle
        $userModel = new User();
        $users = $userModel->getAllUsers();

        // Chargez la vue
        ob_start();
        require __DIR__ . '/../views/components/header/header.php';
        require __DIR__ . '/../views/pages/home.php';
        require __DIR__ . '/../views/components/footer/footer.php';
        return ob_get_clean();
    }
}
