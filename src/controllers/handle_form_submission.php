<?php
// Inclure le fichier du contrôleur
require_once './AdminController.php';
use Src\Controllers\AdminController;

// Créer une instance du contrôleur
$controller = new AdminController();

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier si les données du formulaire existent
    if (isset($_POST['newKey'])) {
        // Récupérer les données du formulaire
        $newKey = $_POST['newKey'];
        
        // Appeler la méthode du contrôleur pour traiter les données
        $controller->handleFormSubmission($newKey);
        
        // Redirection vers une autre page après le traitement du formulaire
        header("Location: some_page.php");
        exit(); // Assurer que le script se termine ici
    } else {
        // Gérer les cas où les données du formulaire sont manquantes
        echo "Erreur : Données du formulaire manquantes.";
    }
} else {
    // Gérer les cas où le formulaire n'a pas été soumis
    echo "Erreur : Le formulaire n'a pas été soumis.";
}
?>
