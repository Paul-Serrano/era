<?php 

namespace Src\Controllers;

require_once __DIR__ . '/../models/Lang.php';

use Src\Models\Lang;

class AccountController 
{
    public function index(): string
    {
        session_start();
        $user = $_SESSION['user'];
        $langs = Lang::findAll();
        $userLang = $user->getLanguages();
        ob_start();
        require __DIR__ . '/../views/components/header/header.php';
        require __DIR__ . '/../views/pages/account.php';
        require __DIR__ . '/../views/components/footer/footer.php';
        return ob_get_clean();
    }

    public function updateUser()
    {
        session_start();
        $user = $_SESSION['user'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Valider et récupérer les données du formulaire
            $firstname = $_POST['firstname'] ?? '';
            $lastname = $_POST['lastname'] ?? '';
            $job = $_POST['job'] ?? '';
            $description = $_POST['description'] ?? '';
            $newLangs = $_POST['newSelectedLangs'] ?? [];

            // Mettre à jour les informations de l'utilisateur
            $user->setFirstname($firstname)
                ->setLastname($lastname)
                ->setJob($job)
                ->setDescription($description);

            // Mettre à jour les langues de l'utilisateur
            $user->clearLanguages();
            foreach ($newLangs as $langName) {
                $lang = new Lang($langName);
                $user->setLanguage($lang);
            }

            // Enregistrer les modifications dans la base de données
            $user->save();

            // Mettre à jour les informations de l'utilisateur dans la session
            $_SESSION['user'] = $user;

            // Redirection après mise à jour réussie
            header('Location: /account?success=update');
            exit;
        } else {
            // Redirection si la méthode HTTP n'est pas POST
            header('Location: /account');
            exit;
        }
    }
}