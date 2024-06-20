<?php

namespace Src\Models;

require_once __DIR__ . '/../models/Database.php';

use PDO;
use Src\Models\Database;

class Tag {

    private $name;
    private static $db;

    public function __construct(string $name) {
        if (!self::$db) {
            self::$db = Database::getPdo();
        }
        if ($name !== '') {
            $this->name = $name;
        }
    }

    public static function initializeDatabase() {
        if (!self::$db) {
            self::$db = Database::getPdo();
        }
    }

    public static function findAll(): array {
        self::initializeDatabase();
        $sql = "SELECT * FROM tag";
        $stmt = self::$db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getName(): string {
        return $this->name;
    }

    public function save(): void
    {
        $db = Database::getPdo();

        try {
            $sql = "INSERT INTO tag (name) VALUES (:name)";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            // Gérer les erreurs de requête SQL ici
            echo "Error: " . $e->getMessage();
        }
    }

    public function delete(): bool
    {
        $db = Database::getPdo();

        try {
            $sql = "DELETE FROM tag WHERE name = :name";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
            $stmt->execute();

            return true; // Suppression réussie
        } catch (\PDOException $e) {
            // Gérer les erreurs de requête SQL ici
            echo "Error: " . $e->getMessage();
            return false; // Échec de la suppression
        }
    }

    public static function findByName(string $name)
    {
        $db = Database::getPdo();

        try {
            $sql = "SELECT * FROM tag WHERE name = :name";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            // Gérer les erreurs de requête SQL ici
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

}
