<?php

namespace Src\Controllers;

class CartController 
{
    public function index()
    {
        ob_start();
        require __DIR__ . '/../views/pages/cart.php';
        return ob_get_clean();
    }
}