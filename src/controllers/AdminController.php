<?php

namespace Src\Controllers;

require_once __DIR__ . '/../models/Admin.php';

use Src\Models\Admin;

class AdminController 
{
    public static $admin;
    
    public function __construct() {
        self::$admin = new Admin();
    }
    
    public function index()
    {
        $adminKey = self::getAdminKey();
        ob_start();
        require __DIR__ . '/../views/pages/admin.php';
        return ob_get_clean();
    }

    public static function getAdminKey() {
        $adminKey = self::$admin->getAdminKey();
        return $adminKey;
    }

    public function handleFormSubmission() {
        // Traitement du formulaire pour mettre à jour la clé admin
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['newKey'])) {
                $newKey = $_POST['newKey'];
                $this->updateAdminKey($newKey);
                // Redirection vers la page admin après le traitement du formulaire
                header("Location: /../../admin");
                exit();
            }
        }
    }

    public static function updateAdminKey(string $newKey) {
        self::$admin->setAdminKey($newKey);
        // Message de confirmation de mise à jour
    }
}
