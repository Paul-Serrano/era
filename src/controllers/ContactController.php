<?php 

namespace Src\Controllers;

class ContactController 
{
    public function index(): string
    {
        ob_start();
        require __DIR__ . '/../views/components/header/header.php';
        require __DIR__ . '/../views/pages/contact.php';
        require __DIR__ . '/../views/components/footer/footer.php';
        return ob_get_clean();
    }
}