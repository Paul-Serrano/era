<?php

namespace Src\Controllers;

class PanelUserController
{
    public function index()
    {
        // Chargez la vue
        ob_start();
        require __DIR__ . '/../views/components/header/header.php';
        require __DIR__ . '/../views/pages/panelUser.php';
        return ob_get_clean();
    }

}