<?php

namespace Src\Controllers;

require_once __DIR__ . '/../models/User.php';

use Src\Models\User;

class SigninController
{
    public function index()
    {
        // Chargez la vue
        ob_start();
        require __DIR__ . '/../views/components/header/header.php';
        require __DIR__ . '/../views/pages/signin.php';
        require __DIR__ . '/../views/components/footer/footer.php';
        return ob_get_clean();
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Valider les données
            $validationResult = $this->checkData($_POST);
            
            if ($validationResult !== true) {
                // Rediriger avec un message d'erreur
                header('Location: /signin?error=' . urlencode($validationResult));
                exit;
            }

            // Créer un nouvel utilisateur
            $user = new User();
            $user
                ->setEmail($_POST['email'])
                ->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT))
                ->setFirstname($_POST['firstname'])
                ->setLastname($_POST['lastname'])
                ->setJob($_POST['job'])
                ->setDescription($_POST['description'])
                // ->setImgPath($_POST['img_path'])
                ->save();

            $user->save();
            header('Location: /?success=signedIn');
        } else {
            // Rediriger vers la page d'inscription si la méthode HTTP n'est pas POST
            header('Location: /inscription');
            exit;
        }
    }

    private function checkData(array $data)
    {
        // Vérifier les champs obligatoires
        $requiredFields = ['email', 'password', 'passwordVerif', 'firstname', 'lastname', 'job', 'description'];
        foreach ($requiredFields as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                return "Le champ {$field} est obligatoire.";
            }
        }

        // Vérifier que les mots de passe sont identiques
        if ($data['password'] !== $data['passwordVerif']) {
            return "passNoMatch";
        }

        // Valider l'email
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return "WrongMail";
        }

        if (User::exists($data['email'])) {
            return "mailTaken";
        }

        return true; // Retourne true si toutes les validations sont passées
    }
}
