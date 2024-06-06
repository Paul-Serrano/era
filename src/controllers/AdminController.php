<?php

namespace Src\Controllers;

class AdminController 
{
    public function index()
    {
        ob_start();
        require __DIR__ . '/../views/pages/admin.php';
        return ob_get_clean();
    }
}