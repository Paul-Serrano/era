<?php

namespace Src\Controllers;

class OfferController 
{
    public function index()
    {
        ob_start();
        require __DIR__ . '/../views/pages/offer.php';
        return ob_get_clean();
    }
}