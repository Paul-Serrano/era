<?php

namespace Src\Models;

require_once __DIR__ . '/../models/Database.php';

use Src\Models\Database;
use PDO;

class Feature {

    private ?int $id = null;
    private string $name;
    private int $price;
    private string $description;
    private ?int $position = null;
    private static $db;

    public function __construct(string $name, string $description, int $price, ?int $id = null) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public static function initializeDatabase() {
        if (!self::$db) {
            self::$db = Database::getPdo();
        }
    }

    // Getters
    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): int {
        return $this->price;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getPosition(): ?int {
        return $this->position;
    }

    // Setters
    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setPrice(int $price): void {
        $this->price = $price;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function setPosition(?int $position): void {
        $this->position = $position;
    }

    public function save(): void {
        self::initializeDatabase();
        $db = self::$db;

        try {
            // Commencer une transaction
            $db->beginTransaction();

            // Insérer la feature dans la table features
            $sql = "INSERT INTO features (name, description, price, position) VALUES (:name, :description, :price, :position)";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':description', $this->description);
            $stmt->bindParam(':price', $this->price);
            $stmt->bindParam(':position', $this->position);
            $stmt->execute();

            // Valider la transaction
            $db->commit();
        } catch (\PDOException $e) {
            // Annuler la transaction en cas d'erreur
            $db->rollBack();
            echo "Error: " . $e->getMessage();
        }
    }

    public function update(): void {
        self::initializeDatabase();
        $db = self::$db;

        try {
            // Commencer une transaction
            $db->beginTransaction();

            // Mettre à jour la feature dans la table features
            $sql = "UPDATE features SET name = :name, description = :description, price = :price, position = :position WHERE id = :id";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':description', $this->description);
            $stmt->bindParam(':price', $this->price);
            $stmt->bindParam(':position', $this->position);
            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();

            // Valider la transaction
            $db->commit();
        } catch (\PDOException $e) {
            // Annuler la transaction en cas d'erreur
            $db->rollBack();
            echo "Error: " . $e->getMessage();
        }
    }

    public function delete(): void {
        self::initializeDatabase();
        $db = self::$db;

        try {
            // Commencer une transaction
            $db->beginTransaction();

            // Supprimer la feature dans la table features
            $sql = "DELETE FROM features WHERE id = :id";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();

            // Valider la transaction
            $db->commit();
        } catch (\PDOException $e) {
            // Annuler la transaction en cas d'erreur
            $db->rollBack();
            echo "Error: " . $e->getMessage();
        }
    }

    public static function findAll(): array {
        self::initializeDatabase();
        $sql = "SELECT * FROM features";
        $stmt = self::$db->prepare($sql);
        $stmt->execute();
        $featuresData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $features = [];
        foreach ($featuresData as $featureData) {
            $feature = new self(
                $featureData['name'],
                $featureData['description'],
                $featureData['price'],
                $featureData['id']
            );
            $feature->setPosition($featureData['position']);
            $features[] = $feature;
        }
        return $features;
    }

    public static function findByName(string $name): ?self {
        self::initializeDatabase();
        $sql = "SELECT * FROM features WHERE name = :name";
        $stmt = self::$db->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
        $featureData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($featureData) {
            $feature = new self(
                $featureData['name'],
                $featureData['description'],
                $featureData['price'],
                $featureData['id']
            );
            $feature->setPosition($featureData['position']);
            return $feature;
        }

        return null;
    }

    public static function findById(int $id): ?self {
        self::initializeDatabase();
        $sql = "SELECT * FROM features WHERE id = :id";
        $stmt = self::$db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $featureData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($featureData) {
            $feature = new self(
                $featureData['name'],
                $featureData['description'],
                $featureData['price'],
                $featureData['id']
            );
            $feature->setPosition($featureData['position']);
            return $feature;
        }

        return null;
    }
}
