<?php

namespace Src\Controllers;

require_once __DIR__ . '/../models/Newsletter.php';

use Src\Models\Newsletter;

class NewsletterController
{
    public function activate()
    {
        if (!filter_var($_POST['newsletterMail'], FILTER_VALIDATE_EMAIL)) {
            header('Location: /?error=mailWrong');
            exit();
        }

        if (Newsletter::exists($_POST['newsletterMail'])) {
            header('Location: /?error=mailTaken');
            exit();
        }

        $newsletter = new Newsletter(
            $_POST['newsletterMail'],
            $_POST['newsletterSurname'],
            $_POST['newsletterName'],
        );

        $newsletter->save();

        header('Location: /?success=newsletterSubscribe');
    }

    public function delete()
    {
        $email = $_POST['newsletterMail'];

        $newsletter = Newsletter::findByMail($email);

        $newsletter->delete();

        if (!$newsletter) {
            header('Location: /admin?error=newsletterNotFound');
            exit();
        }

        if ($newsletter->delete()) {
            header('Location: /admin?success=newsletterDeleted');
            exit();
        } else {
            header('Location: /admin?error=deleteError');
            exit();
        }
    }
}