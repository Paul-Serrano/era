<?php

namespace Src\Models;

use PDO;
use PDOException;

class Database {
    private static $host = 'db'; // Mettez ici l'adresse de votre serveur MySQL si elle diffère de 'db'
    private static $dbname;
    private static $username;
    private static $password;
    private static $pdo = null;

    public static function init() {
        if (self::$pdo === null) {
            self::$dbname = $_ENV['MYSQL_DATABASE'];
            self::$username = $_ENV['MYSQL_USER'];
            self::$password = $_ENV['MYSQL_PASSWORD'];

            self::connect();
        }
    }

    private static function connect() {
        try {
            $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            self::$pdo = new PDO($dsn, self::$username, self::$password, $options);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit;
        }
    }

    public static function getPdo() {
        self::init(); // Assurez-vous que PDO est initialisé
        return self::$pdo;
    }

    public function query($sql, $params = []) {
        // Exécution de la requête préparée
        $stmt = self::getPdo()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}
