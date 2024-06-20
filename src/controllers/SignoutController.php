<?php

namespace Src\Controllers;

class SignoutController
{
    public function signout()
    {
        // Détruire la session
        session_start();
        session_unset();
        session_destroy();

        // Rediriger vers la page de connexion
        header('Location: /?success=signOut');
        exit;
    }
}
