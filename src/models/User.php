<?php

namespace Src\Models;

use Src\Models\Database;

class User
{
    private $pdo;
    private $database;

    public function __construct()
    {
        $this->database = new Database();
        $this->pdo = $this->database->getPdo();
    }

    public function getAllUsers()
    {
        $stmt = $this->pdo->query('SELECT * FROM users');
        return $stmt->fetchAll();
    }
}
