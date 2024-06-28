<?php 

namespace Src\Controllers;

require_once __DIR__ . '/../models/Article.php';
require_once __DIR__ . '/../models/Tag.php';
require_once __DIR__ . '/../repository/Tool.php';
require_once __DIR__ . '/../repository/FeatureRepository.php';
require_once __DIR__ . '/../models/Feature.php';

use Src\Models\Tag;
use Src\Models\Article;
use Src\Models\Newsletter;
use Src\Models\User;
use Src\Models\Feature;
use Src\Repository\FeatureRepository;
use Src\Repository\Tool\Tool;

class AdminController extends Tool
{
    private array $tags;
    private array $articles;
    private array $users;
    private array $newsletters;
    private array $features;
    
    public function __construct() {
        $this->tags = $this->findAllTags();
        $this->articles = $this->findAllArticles();
        $this->users = $this->findAllUsers();
        $this->newsletters = $this->findAllNewsletters();
        $this->features = $this->findAllFeatures();
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
        // Récupérer tous les articles depuis la base de données
        $data = Article::findAll();

        $articles = [];
        foreach($data as $articleData) {
            $articles[] = new Article($articleData->getTitle(), $articleData->getContent(), $articleData->getUserMail(), $articleData->getId());
        }

        $this->articles = $articles;
        return $this->articles;
    }

    public function findAllUsers(): array {
        // Récupérer tous les utilisateurs depuis la base de données
        $users = User::findAll();

        $this->users = $users;
        return $this->users;
    }

    public function findAllNewsletters(): array {
        // Récupérer toutes les newsletters depuis la base de données
        $newsletters = Newsletter::findAll();

        $this->newsletters = $newsletters;
        return $this->newsletters;
    }

    public function findAllFeatures(): array {
        // Récupérer toutes les fonctionnalités depuis la base de données
        $data = Feature::findAll();

        $features = [];
        foreach($data as $featureData) {
            $feature = new Feature($featureData->getName(), $featureData->getDescription(), $featureData->getPrice());
            $feature->setId($featureData->getId());
            $feature->setPosition($featureData->getPosition());
            $features[] = $feature;
        }

        $this->features = $features;
        return $this->features;
    }

    private function getDataForView(): array {
        return [
            'tags' => $this->tags,
            'articles' => $this->articles,
            'users' => $this->users,
            'newsletters' => $this->newsletters,
            'features' => $this->features
        ];
    }

    public function saveTag(array $data): void {
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

    public function deleteTag(array $data): void {
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

        $article = new Article($title, $content, $userMail, 0);
        $article->setTags($tags);
        $article->save();
        header('Location: admin?success=addArticle');
    }

    function generateSlug(string $title) {
        $slug = strtolower($title);
        $slug = preg_replace('/[^a-z0-9\-]/', '-', $slug); // Remplace les caractères non alphanumériques par des tirets
        $slug = trim($slug, '-'); // Supprime les tirets en début et fin de chaîne
        return $slug;
    }

    public function deleteArticle(array $data): void {
        $articleTitle = $data['articleTitle'];

        // Trouver l'article par le titre
        $article = Article::findByTitle($articleTitle);

        if ($article) {
            $article->delete($article);
            header('Location: /admin?success=deleteArticle');
            exit;
        } else {
            echo "Erreur lors de la suppression de l'article.";
            exit;
        }
    }

    public function updateArticle(array $data) {
        $articleId = $data['newArticleId'];
        $article = Article::findById($articleId);
        if ($article) {
            $article->setTitle($data['newArticleTitle']);
            $article->setContent($data['newArticleContent']);
            $article->setTags($data['newSelectedTags']);
            $article->update();
            header('Location: /admin?success=updateArticle');
            exit;
        }
    }

    // Méthodes pour la gestion des fonctionnalités

    public function saveFeature(array $data): void {
        $existingFeature = Feature::findByName($data['featureName']);

        if ($existingFeature) {
            header('Location: /admin?error=featureNameTaken');
            exit;
        }

        $name = $data['featureName'];
        $description = $data['featureDescription'];
        $price = $data['featurePrice'];
        $position = $data['featurePosition'] ?? null;

        $feature = new Feature($name, $description, $price);
        $feature->setPosition($position);
        $feature->save();
        header('Location: /admin?success=addFeature');
    }

    public function deleteFeature(array $data): void {
        $featureId = $data['featureId'];

        $feature = Feature::findById($featureId);

        if ($feature) {
            $feature->delete();
            header('Location: /admin?success=deleteFeature');
            exit;
        } else {
            echo "Erreur lors de la suppression de la fonctionnalité.";
            exit;
        }
    }

    public function updateFeature(array $data): void {
        $featureId = $data['updateFeatureId'];
        $feature = Feature::findById($featureId);
        if ($feature) {
            $feature->setName($data['updateFeatureName']);
            $feature->setDescription($data['updateFeatureDescription']);
            $feature->setPrice($data['updateFeaturePrice']);
            $feature->setPosition($data['updateFeaturePosition']);
            $feature->update();
            header('Location: /admin?success=updateFeature');
            exit;
        }
    }
}
