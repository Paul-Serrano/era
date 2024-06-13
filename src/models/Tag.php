<?php

namespace Src\Models;

require_once __DIR__ . '/../models/Database.php';

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

    public function setName(string $name): self {
        $currentName = $this->name;
        $this->name = $name;
        $sql = "UPDATE admin SET name = :name WHERE name = :currentMail";
        $stmt = self::$db->prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':currentName', $currentName);
        $stmt->execute();
        return $this;
    }

    // public function save()

}
