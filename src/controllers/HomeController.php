<?php

namespace Src\Controllers;

class HomeController
{
    public function index()
    {

        // Chargez la vue
        ob_start();
        require __DIR__ . '/../views/components/header/header.php';
        require __DIR__ . '/../views/pages/home.php';
        require __DIR__ . '/../views/components/footer/footer.php';
        return ob_get_clean();
    }
}
