<?php

namespace Src\Models;

require_once __DIR__ . '/../models/Database.php';

use PDO;
use Src\Models\Database;

class User {
    private string $email;
    private string $password;
    private string $firstname;
    private string $lastname;
    private string $job;
    private string $description;
    private string $img_path;
    private int $admin;
    private static $db;

    public function __construct(string $email, string $firstname, string $lastname, string $job, string $description){
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->job = $job;
        $this->description = $description;
    }

    public static function initializeDatabase() {
        if (!self::$db) {
            self::$db = Database::getPdo();
        }
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): self {
        $this->email = $email;
        return $this;
    }

    public function getPassword(): string {
        return $this->password;
        return $this;
    }

    public function setPassword(string $password): self {
        $this->password = $password;
        return $this;
    }

    public function getFirstname(): string {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self {
        $this->firstname = $firstname;
        return $this;
    }

    public function getLastname(): string {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self {
        $this->lastname = $lastname;
        return $this;
    }

    public function getJob(): string {
        return $this->job;
    }

    public function setJob(string $job): self {
        $this->job = $job;
        return $this;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): self {
        $this->description = $description;
        return $this;
    }

    public function getImgPath(): string {
        return $this->img_path;
    }

    public function setImgPath(string $img_path): self {
        $this->img_path = $img_path;
        return $this;
    }

    public function isAdmin(): int {
        return $this->admin;
    }

    public function setAdmin(int $admin): self {
        $this->admin = $admin;
        return $this;
    }

    public static function exists(string $mail) {
        $db = new Database();
        $result = $db->query("SELECT * FROM user WHERE mail = ?", [$mail])->fetch(PDO::FETCH_ASSOC);
        return !empty($result);
    }

    public static function findByEmail($email) {
        $db = new Database();
        $result = $db->query("SELECT * FROM user WHERE mail = ?", [$email])->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $user = new User(
                $result['mail'],
                $result['firstname'],
                $result['lastname'],
                $result['job'],
                $result['description']
            );
            $user
                ->setPassword($result['pass'])
                ->setAdmin($result['admin'])
                ->setImgPath($result['img_path']);
            return $user;
        }

        return null;
    }

    public static function findAllAuthors(): array {
        $db = new Database();
        $sql = "SELECT DISTINCT u.* FROM user u JOIN article a ON u.mail = a.user_mail";
        $stmt = $db->query($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function save() {
        $db = new Database();
        if (self::exists($this->getEmail())) {
            // Update
            $db->query("UPDATE user SET pass = ?, firstname = ?, lastname = ?, job = ?, description = ?, img_path = ?, admin = ? WHERE mail = ?", [
                $this->getPassword(),
                $this->getFirstname(),
                $this->getLastname(),
                $this->getJob(),
                $this->getDescription(),
                '',
                0,
                $this->getEmail()
            ]);
        } else {
            // Insert
            $db->query("INSERT INTO user (mail, pass, firstname, lastname, job, description, img_path, admin) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [
                $this->getEmail(),
                $this->getPassword(),
                $this->getFirstname(),
                $this->getLastname(),
                $this->getJob(),
                $this->getDescription(),
                '',
                0
            ]);
        }
    }

    public static function findAll(): array {
        self::initializeDatabase();
        $sql = "SELECT * FROM user WHERE admin = 0";
        $stmt = self::$db->prepare($sql);
        $stmt->execute();
        $dataUsers = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $users = [];
        foreach ($dataUsers as $dataUser) {
            $user = new self(
                $dataUser['mail'],
                $dataUser['firstname'],
                $dataUser['lastname'],
                $dataUser['job'],
                $dataUser['description']
            );
            $users[] = $user;
        }
        return $users;
    }
}
