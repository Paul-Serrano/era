<?php

namespace Src\Controllers;

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Lang.php';

use Src\Models\Lang;
use Src\Models\User;

class SigninController
{
    public function index()
    {
        // Chargez la vue
        $langs = Lang::findAll();
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

            $userLang = [];

            // Créer un nouvel utilisateur
            $user = new User(
                $_POST['email'],
                $_POST['firstname'],
                $_POST['lastname'],
                $_POST['job'],
                $_POST['description'],
            );
            $user
                ->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT))
                ->setAdmin(0);
                // ->setImgPath($_POST['img_path'])

            foreach($_POST['selectedLangs'] as $data) {
                $lang = new Lang($data);
                $user->setLanguage($lang);
            }

            $user->save();
            header('Location: /login?success=signedIn&mail='.$_POST['email'].'');
            exit;
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

        if(empty($data['selectedLangs'])) {
            return "noLangs";
        }

        return true; // Retourne true si toutes les validations sont passées
    }
}
