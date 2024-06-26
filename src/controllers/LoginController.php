<?php

namespace Src\Controllers;

require_once __DIR__ . '/../models/User.php';

use Src\Models\User;

class LoginController
{
    public function index()
    {
        // Chargez la vue
        ob_start();
        require __DIR__ . '/../views/components/header/header.php';
        require __DIR__ . '/../views/pages/login.php';
        require __DIR__ . '/../views/components/footer/footer.php';
        return ob_get_clean();
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Valider les données de connexion
            $validationResult = $this->validateLoginData($_POST['email'], $_POST['password']);
            
            if ($validationResult !== true) {
                // Rediriger avec un message d'erreur
                header('Location: /login?error=' . urlencode($validationResult));
                exit;
            }

            // Récupérer l'utilisateur depuis la base de données
            $user = User::findByEmail($_POST['email']);

            // Vérifier si l'utilisateur existe et si le mot de passe est correct
            if ($user && password_verify($_POST['password'], $user->getPassword())) {
                // Authentification réussie
                // Enregistrez les informations de l'utilisateur dans la session ou un autre mécanisme d'authentification
                session_start();
                $_SESSION['user'] = $user;
                $user->isAdmin() ?
                header('Location: /admin?success=logIn') :
                header('Location: /panelUser?success=logIn'); // Redirection vers la page d'accueil après connexion réussie
                exit;
            } else {
                // Mauvaises informations de connexion
                header('Location: /login?error=invalidCredentials');
                exit;
            }
        } else {
            // Redirection si la méthode HTTP n'est pas POST
            header('Location: /login');
            exit;
        }
    }

    private function validateLoginData($email, $password)
    {
        // Vérifier que l'email et le mot de passe sont présents et non vides
        if (empty($email) || empty($password)) {
            return "Veuillez fournir à la fois l'email et le mot de passe.";
        }

        // Ajoutez d'autres validations personnalisées si nécessaire

        return true; // Retourne true si toutes les validations sont passées
    }
}
