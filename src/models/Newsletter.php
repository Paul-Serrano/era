<?php

namespace Src\Models;

require_once __DIR__ . '/../models/Database.php';

use PDO;
use Src\Models\Database;

class Newsletter {
    private string $mail;
    private string $firstname;
    private string $lastname;
    private static $db;

    public function __construct(string $mail, string $firstname, string $lastname)
    {
        $this->mail = $mail;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public static function initializeDatabase() {
        if (!self::$db) {
            self::$db = Database::getPdo();
        }
    }

    // Getter and Setter for mail
    public function getMail(): string
    {
        return $this->mail;
    }

    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    // Getter and Setter for firstname
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    // Getter and Setter for lastname
    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    // Static method to find all newsletters
    public static function findAll(): array
    {
        self::initializeDatabase();
        $stmt = self::$db->query('SELECT * FROM newsletter');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Static method to find a newsletter by mail
    public static function findByMail(string $mail): ?self
    {
        self::initializeDatabase();
        $stmt = self::$db->prepare('SELECT * FROM newsletter WHERE mail = :mail');
        $stmt->execute(['mail' => $mail]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($data) {
            return new self($data['mail'], $data['firstname'], $data['lastname']);
        }
        return null;
    }

    // Method to save a newsletter
    public function save(): bool
    {
        self::initializeDatabase();
        $stmt = self::$db->prepare('INSERT INTO newsletter (mail, firstname, lastname) VALUES (:mail, :firstname, :lastname)');
        return $stmt->execute([
            'mail' => $this->mail,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
        ]);
    }

    // Method to delete a newsletter
    public function delete(): bool
    {
        self::initializeDatabase();
        $stmt = self::$db->prepare('DELETE FROM newsletter WHERE mail = :mail');
        return $stmt->execute(['mail' => $this->mail]);
    }
}
