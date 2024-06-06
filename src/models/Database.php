<?php

namespace Src\Models;

use PDO;
use PDOException;

class Database {
    private static $host = 'db';
    private static $dbname;
    private static $username;
    private static $password;
    private static $pdo = null;

    public static function init() {
        self::$dbname = $_ENV['MYSQL_DATABASE'];
        self::$username = $_ENV['MYSQL_USER'];
        self::$password = $_ENV['MYSQL_PASSWORD'];

        self::connect();
    }

    private static function connect() {
        if (self::$pdo === null) {
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
    }

    public static function getPdo() {
        if (self::$pdo === null) {
            self::init();
        }
        return self::$pdo;
    }
}
