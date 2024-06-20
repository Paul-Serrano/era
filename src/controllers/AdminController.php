<?php 

namespace Src\Controllers;

require_once __DIR__ . '/../models/Article.php';
require_once __DIR__ . '/../models/Tag.php';

use Src\Models\Tag;
use Src\Models\Article;

class AdminController 
{
    private array $tags;
    private array $articles;
    
    public function __construct() {
        $this->tags = $this->findAllTags();
        $this->articles = $this->findAllArticles();
    }
    
    public function index(): string
    {
        $data = $this->getDataForView();
        ob_start();
        require __DIR__ . '/../views/components/header/header.php';
        require __DIR__ . '/../views/pages/admin.php';
        require __DIR__ . '/../views/components/footer/footer.php';
        return ob_get_clean();
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

    public function findAllArticles(): array {
        // Récupérer tous les tags depuis la base de données
        $data = Article::findAll();

        $articles = [];
        foreach($data as $articleData) {
            $articles[] = new Article($articleData['title'], $articleData['content'], $articleData['user_mail']);
        }

        $this->articles = $articles;
        return $this->articles;
    }

    private function getDataForView(): array {
        return [
            'tags' => $this->tags,
            'articles' => $this->articles,
        ];
    }

    public function saveTag(array $data): void
    {
        // Vérifier si le tag existe déjà
        $existingTag = Tag::findByName($data['addTag']);

        if ($existingTag) {
            // Rediriger avec un message d'erreur si le tag existe déjà
            header('Location: /admin?error=tagTaken');
            exit;
        }

        // Créer un nouveau tag
        $tag = new Tag($data['addTag']);

        // Sauvegarder le tag en base de données
        $tag->save();

        // Rediriger avec un message de succès
        header('Location: /admin?success=addtag');
        exit;
    }

    public function deleteTag(array $data): void
    {
        $tagName = $data['tagToDelete'];

        // Créer une instance de Tag avec le nom du tag à supprimer
        $tag = new Tag($tagName);

        // Appeler la méthode delete pour supprimer le tag
        $success = $tag->delete();

        if ($success) {
            // Redirection avec message de succès
            header('Location: /admin?success=deleteTag');
            exit;
        } else {
            // Gérer les erreurs de suppression ici
            echo "Erreur lors de la suppression du tag.";
            exit;
        }
    }

    public function saveArticle(array $data): void {
        session_start();
        $existingArticle = Article::findByTitle($data['articleTitle']);

        if($existingArticle) {
            header('Location: /admin?error=titleTaken');
            exit;
        }

        $userMail = $_SESSION['user']->getEmail();
        $title = $data['articleTitle'];
        $content = $data['articleContent'];
        $tags = $data['selectedTags'];

        $article = new Article($title, $content, $userMail);
        $article->setTags($tags);
        $article->save();
        header('Location: admin?success=addArticle');
    }
}
