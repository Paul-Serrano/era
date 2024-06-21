<?php

namespace Src\Controllers;

require_once __DIR__ . "/../models/Article.php";
require_once __DIR__ . "/../models/Tag.php";
require_once __DIR__ . "/../models/User.php";

use Src\Models\Article;
use Src\Models\Tag;
use Src\Models\User;

class BlogController 
{
    private array $tags;
    private array $articles;
    private array $authors;

    public function index()
    {
        $data = $this->getDataForView();
        ob_start();
        require_once __DIR__ . '/../views/components/header/header.php';
        require_once __DIR__ . '/../views/pages/blog.php';
        require_once __DIR__ . '/../views/components/footer/footer.php';
        return ob_get_clean();
    }

    public function __construct() {
        $this->tags = $this->findAllTags();
        $this->articles = $this->findAllArticles();
        $this->authors = $this->findAllAuthors();
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
        // Récupérer tous les articles depuis la base de données
        $author = $_GET['author'] ?? null;
        $tag = $_GET['tag'] ?? null;

        $data = Article::findAllFiltered($author, $tag);
        $articles = [];
        foreach($data as $articleData) {
            $articles[] = new Article($articleData['title'], $articleData['content'], $articleData['user_mail'], $articleData['id'],);
        }

        $this->articles = $articles;
        return $this->articles;
    }

    public function findAllAuthors(): array {
        // Récupérer tous les auteurs depuis la base de données
        $data = User::findAllAuthors();
        $authors = [];
        foreach($data as $authorData) {
            $authors[] = $authorData;
        }

        $this->authors = $authors;
        return $this->authors;
    }

    public function viewArticle(int $id) {
        if ($id) {
            $article = Article::findById((int)$id);
            if ($article) {
                require_once __DIR__ . '/../views/components/header/header.php';
                require_once __DIR__ . '/../views/pages/article.php';
                require_once __DIR__ . '/../views/components/footer/footer.php';
                return;
            }
        }
        // Gestion d'erreur si l'article n'est pas trouvé
        echo "Article not found";
    }

    private function getDataForView(): array {
        return [
            'tags' => $this->tags,
            'articles' => $this->articles,
            'authors' => $this->authors
        ];
    }
}
