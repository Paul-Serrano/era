<?php

namespace Src\Models;

require_once __DIR__ . '/../models/Database.php';

use Src\Models\Database;

class Article {

    private string $title;
    private string $content;
    private array $tags;
    private string $userMail;
    private static $db;

    public function __construct(string $title, string $content, array $tags, string $userMail = '') {
        if (!self::$db) {
            self::$db = Database::getPdo();
        }
        if(isset($_SESSION['user']['mail'])) {
            $this->userMail = $_SESSION['user']['mail'];
        }
    }

    public static function initializeDatabase() {
        if (!self::$db) {
            self::$db = Database::getPdo();
        }
    }

    public static function findAll(): array {
        self::initializeDatabase();
        $sql = "SELECT * FROM admin";
        $stmt = self::$db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
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

    public function save() {
        $sql = "
        INSERT INTO article VALUES ('', ':title',  ':userMail',  ':content')";
        $stmt = self::$db->prepare($sql);
        $stmt->bindParam(':title', $this->getTitle());
        $stmt->bindParam(':userMail', $this->getUserMail());
        $stmt->bindParam(':content', $this->getContent());
    }

    public function delete(self $article) {

    }


}
