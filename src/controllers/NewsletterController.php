<?php

namespace Src\Controllers;

require_once __DIR__ . '/../models/Newsletter.php';

use Src\Models\Newsletter;

class NewsletterController
{
    public function activate()
    {
        $newsletter = new Newsletter(
            $_POST['newsletterMail'],
            $_POST['newsletterSurname'],
            $_POST['newsletterName'],
        );

        $newsletter->save();

        header('Location: /?success=newsletterSubscribe');
    }
}