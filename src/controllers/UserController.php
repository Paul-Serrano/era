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
        $user = new User();
        $user
            ->setEmail($data['mail'])
            ->setPassword(password_hash($data['pass'], PASSWORD_BCRYPT))
            ->setFirstname($data['firstname'])
            ->setLastname($data['lastname'])
            ->setJob($data['job'])
            ->setDescription($data['description'])
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
            $user = new User();
            $user
                ->setEmail($_POST['email'])
                ->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT))
                ->setFirstname($_POST['firstname'])
                ->setLastname($_POST['lastname'])
                ->setJob($_POST['job'])
                ->setDescription($_POST['description'])
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
