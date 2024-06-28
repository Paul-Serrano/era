<?php

namespace Src\Models;

use Src\Models\User;

require_once __DIR__ . '/../models/User.php';

class UserController {
    public function index() {
        // Action par défaut
        echo "Page d'accueil";
    }

    public function createUser(array $data) {
        // Exemple d'action pour créer un utilisateur
        $user = new User($data['mail'], $data['firstname'], $data['lastname'], $data['job'], $data['description']);
        $user
            ->setPassword(password_hash($data['pass'], PASSWORD_BCRYPT))
            ->setImgPath($data['img_path'])
            ->save();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Vérifier l'authentification de l'utilisateur
            $user = User::findByEmail($email);

            if ($user && password_verify($password, $user->getPassword())) {
                echo "Connexion réussie ! Bienvenue, " . $user->getFirstname() . " " . $user->getLastname();
                // Vous pouvez également démarrer une session et enregistrer des informations utilisateur ici
            } else {
                echo "Identifiants incorrects. Veuillez réessayer.";
            }
        } else {
            // Rediriger vers la page de connexion si la méthode HTTP n'est pas POST
            header('Location: views/login.php');
            exit;
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User($_POST['email'], $_POST['firstname'], $_POST['lastname'], $_POST['job'], $_POST['description']);
            $user
                ->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT))
                ->setImgPath($_POST['img_path'])
                ->save();

            echo "Inscription réussie ! Bienvenue, " . $user->getFirstname() . " " . $user->getLastname();
        } else {
            // Rediriger vers la page d'inscription si la méthode HTTP n'est pas POST
            header('Location: views/register.php');
            exit;
        }
    }
}
