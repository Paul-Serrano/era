<?php

session_start();
// Inclure le fichier du contrôleur
require_once './AdminController.php';
use Src\Controllers\AdminController;

// Créer une instance du contrôleur
$controller = new AdminController('');

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier si les données du formulaire existent
    if (isset($_POST['submitAdmin'])) {
        $adminData = [
            'mail' => $_POST['adminMail'], 
            'pass' => $_POST['adminPass']
        ];
        $_SESSION['admin'] = $controller->checkAdminInfos($adminData);
        header("Location: /admin/update/general");
        exit();
    } else if(isset($_POST['submitNewAdmin'])) {
        if($_POST['newAdminPass'] !== $_POST['newAdminPassVerif']) header("Location: /admin/update/general?error=passNoMatch");
        else {
            $adminData = [
                'mail' => $_POST['newAdminMail'], 
                'pass' => $_POST['newAdminPass']
            ];
            $controller->updateAdmin($adminData);
            header("Location: /admin/update/general");
            exit();
        }
    } else if(isset($_POST['tagSubmit'])) {
        
    } else if(isset($_POST['articleSubmit'])) {
        $articleData = [
            'title' => $_POST['articleTitle'],
            'content' => $_POST['articleContent'],
            'tags' => $_POST['selectedTags'],
        ];
        $controller->saveArticle($articleData);
    }
    
    else {
        // Gérer les cas où les données du formulaire sont manquantes
        echo "Erreur : Données du formulaire manquantes.";
    }
} else {
    // Gérer les cas où le formulaire n'a pas été soumis
    echo "Erreur : Le formulaire n'a pas été soumis.";
}

