<?php 

namespace Src\Controllers;

require_once __DIR__ . '/../models/Admin.php';

use Src\Models\Admin;

class AdminController 
{
    private $admin;
    private $path;
    
    public function __construct(string $path) {
        $this->path = $path;
    }
    
    public function index(): string
    {
        $path = $this->getPath();
        $admin = $this->admin;
        switch ($path) {
            case '/wrongMethodAdmin':
                header('Location: /admin');
                break;
            case '/admin/update/general':
                $component = __DIR__ . '../../../src/views/components/general-admin/general-admin.php';
                break;
            case '/admin/update/blog':
                $component = __DIR__ . '../../../src/views/components/blog-admin/blog-admin.php';
                break;
            default:
                break;
        }
        ob_start();
        require __DIR__ . '/../views/components/header/header.php';
        require __DIR__ . '/../views/pages/admin.php';
        return ob_get_clean();
    }

    public function getPath(): string {
        return $this->path;
    }

    public function setPath(string $path): void {
        $this->path = $path; 
    }

    public function getAdmin(): Admin {
        return $this->admin;
    }

    public function setAdmin(Admin $admin) : void {
        $this->admin = $admin;
    }

    public function updateAdmin(array $data): void {
        $this->admin = new Admin($data['mail']);
        $this->admin->setMail($data['mail']);
        $this->admin->setPass($data['pass']);
        header("Location: /../../admin/update");
        exit();
        // Message de confirmation de mise à jour
    }

    public function checkAdminInfos(array $data): ?Admin {
        $admins = Admin::findAll();
        $mailFound = false;
        foreach ($admins as $admin) {
            if ($admin['mail'] === $data['mail']) {
                // var_dump(password_verify($data['pass'], $admin['pass']));
                // die();
                // password_verify($data['pass'], $admin['pass']);
                if ($data['pass'] == $admin['pass']) { // Utiliser password_verify pour vérifier le mot de passe
                    $this->admin = new Admin($data['mail']);
                    $mailFound = true;
                    return $this->admin;
                } else {
                    header("Location: /../../admin?error=wrongPass");
                    return null;
                }
            }
        }
        !$mailFound ? header("Location: /../../admin?error=wrongMail") : null;
        return null;
    }
}
