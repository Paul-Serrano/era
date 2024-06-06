<?php

namespace Src\Controllers;

class BlogController 
{
    public function index()
    {
        ob_start();
        require __DIR__ . '/../views/pages/blog.php';
        return ob_get_clean();
    }
}