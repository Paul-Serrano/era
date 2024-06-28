<?php

namespace Src\Repository;

require_once __DIR__ . '/../models/Database.php';
require_once __DIR__ . '/../models/Feature.php';

use Src\Models\Database;
use Src\Models\Feature;
use PDO;

class FeatureRepository {

    private static $db;

    public function __construct()
    {
        self::initializeDatabase();
    }

    public static function initializeDatabase() {
        if (!self::$db) {
            self::$db = Database::getPdo();
        }
    }

    public function save(Feature $feature): bool
    {
        $sql = "INSERT INTO features (name, description, price, position) VALUES (:name, :description, :price, :position)";
        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(':name', $feature->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':description', $feature->getDescription(), PDO::PARAM_STR);
        $stmt->bindValue(':price', $feature->getPrice(), PDO::PARAM_INT);
        $stmt->bindValue(':position', $feature->getPosition(), PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function update(Feature $feature): bool
    {
        $sql = "UPDATE features SET name = :name, description = :description, price = :price, position = :position WHERE id = :id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(':id', $feature->getId(), PDO::PARAM_INT);
        $stmt->bindValue(':name', $feature->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':description', $feature->getDescription(), PDO::PARAM_STR);
        $stmt->bindValue(':price', $feature->getPrice(), PDO::PARAM_INT);
        $stmt->bindValue(':position', $feature->getPosition(), PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM features WHERE id = :id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM features";
        $stmt = $this->db->query($sql);

        $features = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $feature = new Feature($row['name'], $row['description'], $row['price']);
            $feature->setId($row['id']);
            $feature->setPosition($row['position']);
            $features[] = $feature;
        }

        return $features;
    }

    public function findByName(string $name): ?Feature
    {
        $sql = "SELECT * FROM features WHERE name = :name";
        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $feature = new Feature($row['name'], $row['description'], $row['price']);
            $feature->setId($row['id']);
            $feature->setPosition($row['position']);
            return $feature;
        }

        return null;
    }

    public function findById(int $id): ?Feature
    {
        $sql = "SELECT * FROM features WHERE id = :id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $feature = new Feature($row['name'], $row['description'], $row['price']);
            $feature->setId($row['id']);
            $feature->setPosition($row['position']);
            return $feature;
        }

        return null;
    }
}
