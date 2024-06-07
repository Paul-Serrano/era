<?php

namespace Src\Models;

require_once __DIR__ . '/../models/Database.php';

use Src\Models\Database;

class Admin {

    private $mail;
    private $pass;
    private static $db;

    public function __construct(string $mail = '') {
        if (!self::$db) {
            self::$db = Database::getPdo();
        }
        if ($mail !== '') {
            $this->mail = $mail;
            $this->pass = $this->fetchPass();
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

    public function getMail(): string {
        return $this->mail;
    }

    public function setMail(string $mail): self {
        $currentMail = $this->mail;
        $this->mail = $mail;
        $sql = "UPDATE admin SET mail = :mail WHERE mail = :currentMail";
        $stmt = self::$db->prepare($sql);
        $stmt->bindParam(':mail', $this->mail);
        $stmt->bindParam(':currentMail', $currentMail);
        $stmt->execute();
        return $this;
    }

    private function fetchPass(): string {
        $sql = "SELECT pass FROM admin WHERE mail = :mail LIMIT 1";
        $stmt = self::$db->prepare($sql);
        $stmt->bindParam(':mail', $this->mail);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result ? $result['pass'] : '';
    }

    public function getPass(): string {
        return $this->pass;
    }

    public function setPass(string $pass): self {
        $this->pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "UPDATE admin SET pass = :pass WHERE mail = :mail";
        $stmt = self::$db->prepare($sql);
        $stmt->bindParam(':pass', $this->pass);
        $stmt->bindParam(':mail', $this->mail);
        $stmt->execute();
        return $this;
    }
}
