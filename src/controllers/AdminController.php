<?php 

namespace Src\Controllers;

require_once __DIR__ . '/../models/Admin.php';
require_once __DIR__ . '/../models/Article.php';
require_once __DIR__ . '/../models/Tag.php';

use Src\Models\Admin;
use Src\Models\Tag;
use Src\Models\Article;

class AdminController 
{
    private Admin $admin;
    private string $path;
    private array $tags;
    private array $articles;
    
    public function __construct(string $path) {
        $this->path = $path;
        $this->tags = [];
        $this->articles = [];
    }
    
    public function index(): string
    {
        $path = $this->getPath();
        $this->findAllTags();
        // $admin = $this->admin;
        // $tags = $this->tags;
        extract(
            [
                'tags' => $this->tags,
                // 'admin' => $this->admin,
                'articles' => $this->articles
            ]
        );
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

    public function findAllTags(): array {
        // Récupérer tous les tags depuis la base de données
        $data = Tag::findAll();
        $tags = [];
        foreach($data as $tagData) {
            $tags[] = new Tag($tagData['name']);
        }

        $this->tags = $tags;
        return $this->tags;
    }

    public function saveArticle(array $data) {
        $article = new Article($data['title'], $data['content'], $data['tags']);
        $article->save();
    }
}
