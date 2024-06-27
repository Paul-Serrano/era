<?php

namespace Src\Models;

require_once __DIR__ . '/../models/Database.php';

use PDO;
use Src\Models\Database;

class Lang {
    private string $name;
    private static $db;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public static function initializeDatabase() {
        if (!self::$db) {
            self::$db = Database::getPdo();
        }
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function save()
    {
        $db = self::$db;

        try {
            // Commencer une transaction
            $db->beginTransaction();

            // Insérer l'article dans la table article
            $sql = "INSERT INTO lang (name) VALUES (:name)";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
            $stmt->execute();

            $db->commit();
        } catch (\PDOException $e) {
            // Annuler la transaction en cas d'erreur
            $db->rollBack();
            echo "Error: " . $e->getMessage();
        }
    }

    public function delete()
    {
        $db = self::$db;
        try {
            // Commencer une transaction
            $db->beginTransaction();
    
            // Supprimer les associations article-tag dans la table article_tags
            $sql = "DELETE FROM user_language WHERE language_name = :language_name";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':language_name', $this->name, PDO::PARAM_STR);
            $stmt->execute();
    
            // Supprimer l'article dans la table article
            $sql = "DELETE FROM lang WHERE name = :name";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
            $stmt->execute();
    
            // Valider la transaction
            $db->commit();
        } catch (\PDOException $e) {
            // Annuler la transaction en cas d'erreur
            $db->rollBack();
            echo "Error: " . $e->getMessage();
        }
    }

    public static function findAll()
    {
        self::initializeDatabase();

        $sql = "SELECT * FROM language";
        $stmt = self::$db->prepare($sql);
        $stmt->execute();
        $dalaLangs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $langs = [];
        foreach ($dalaLangs as $data) {
            $lang = new self(
                $data['name'],
            );
            $langs[] = $lang;
        }
        return $langs;
    }

    public function findByName(string $name)
    {

    }
}