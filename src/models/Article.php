<?php

namespace Src\Models;

require_once __DIR__ . '/../models/Database.php';

use Src\Models\Database;
use PDO;

class Article {

    private int $id;
    private string $title;
    private string $content;
    private array $tags;
    private string $userMail;
    private static $db;
    private string $autor;

    public function __construct(string $title, string $content, string $userMail) {
        if (!self::$db) {
            self::$db = Database::getPdo();
        }
        $this->title = $title;
        $this->content = $content;
        $this->tags = $this->getTags();
        if(isset($_SESSION['user'])) {
            $this->userMail = $_SESSION['user']->getEmail();
        } else {
            $this->userMail = $userMail;
        }
        $this->autor = $this->getAutor();
    }

    public static function initializeDatabase() {
        if (!self::$db) {
            self::$db = Database::getPdo();
        }
    }

    public static function findAll(): array {
        self::initializeDatabase();
        $sql = "SELECT * FROM article";
        $stmt = self::$db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findByTitle(string $title): ?self {
        self::initializeDatabase();
        $sql = "SELECT * FROM article WHERE title = :title";
        $stmt = self::$db->prepare($sql);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->execute();
        $articleData = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($articleData) {
            $article = new self($articleData['title'], $articleData['content'], $articleData['user_mail']);
            $article->setTags(self::getTagsByArticleTitle($articleData['title']));
            return $article;
        }

        return null;
    }

    public static function getTagsByArticleTitle(string $articleTitle): array {
        self::initializeDatabase();
        $sql = "SELECT tag_name FROM article_tags WHERE article_title = :articleTitle";
        $stmt = self::$db->prepare($sql);
        $stmt->bindParam(':articleTitle', $articleTitle, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public function getId(): int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title): self {
        $this->title = $title;
        return $this;
    }

    public function getUserMail(): string {
        return $this->userMail;
    }

    public function setUserMail(string $userMail): self {
        $this->userMail = $userMail;
        return $this;
    }

    public function getContent(): string {
        return $this->content;
    }

    public function setContent(string $content): self {
        $this->content = $content;
        return $this;
    }

    public function getTags(): array {
        $db = self::$db;
        $sql = "SELECT at.tag_name FROM article_tags AS at JOIN article AS a ON a.title = at.article_title WHERE a.title = '".$this->getTitle()."'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public function setTags(array $tags): void {
        $this->tags = $tags;
    }

    public function getAutor(): string {
        $db = self::$db;
        $sql = "SELECT firstname, lastname FROM user WHERE mail = '".$this->userMail."'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $autorArray = $stmt->fetch();

        $autor = $autorArray['firstname'] . ' ' . $autorArray['lastname'];

        return $autor;
    }

    public function save(): void {
        $db = self::$db;

        try {
            // Commencer une transaction
            $db->beginTransaction();

            // Insérer l'article dans la table article
            $sql = "INSERT INTO article (title, user_mail, content) VALUES (:title, :userMail, :content)";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':userMail', $this->userMail);
            $stmt->bindParam(':content', $this->content);
            $stmt->execute();

            $articleTitle = $this->getTitle();

            // Insérer les associations article-tag dans la table article_tags
            $sql = "INSERT INTO article_tags (article_title, tag_name) VALUES (:articleTitle, :tagName)";
            $stmt = $db->prepare($sql);
            foreach ($this->tags as $tag) {
                $stmt->bindParam(':articleTitle', $articleTitle, PDO::PARAM_INT);
                $stmt->bindParam(':tagName', $tag, PDO::PARAM_STR);
                $stmt->execute();
            }

            // Valider la transaction
            $db->commit();
        } catch (\PDOException $e) {
            // Annuler la transaction en cas d'erreur
            $db->rollBack();
            echo "Error: " . $e->getMessage();
        }
    }

    public function delete(): void {
        $db = Database::getPdo();
        try {
            // Commencer une transaction
            $db->beginTransaction();
    
            // Supprimer les associations article-tag dans la table article_tags
            $sql = "DELETE FROM article_tags WHERE article_title = :title";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':title', $this->title, PDO::PARAM_STR);
            $stmt->execute();
    
            // Supprimer l'article dans la table article
            $sql = "DELETE FROM article WHERE title = :title";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':title', $this->title, PDO::PARAM_STR);
            $stmt->execute();
    
            // Valider la transaction
            $db->commit();
        } catch (\PDOException $e) {
            // Annuler la transaction en cas d'erreur
            $db->rollBack();
            echo "Error: " . $e->getMessage();
        }
    }
}
