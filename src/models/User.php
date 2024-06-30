<?php

namespace Src\Models;

require_once __DIR__ . '/../models/Database.php';
require_once __DIR__ . '/../models/Lang.php';
require_once __DIR__ . '/../repository/Tool.php';

use PDO;
use Src\Models\Database;
use Src\Models\Lang;
use Src\Repository\Tool\Tool;

class User extends Tool {
    private string $email;
    private string $password;
    private string $firstname;
    private string $lastname;
    private string $job;
    private string $description;
    private string $img_path;
    private int $admin;
    private array $languages;
    private array $features = [];
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

    public function getLanguages(): array {
        return $this->languages;
    }

    public function setLanguage(Lang $lang): self {
        $this->languages[] = $lang;
        return $this;
    }

    public function unsetLanguage(Lang $lang): self {
        foreach($this->languages as $key => $storedLang) {
            if($storedLang->getName() == $lang->getName()) {
                unset($this->languages[$key]);
            }
        }

        return $this;
    }

    public function getFeatures(): array {
        return $this->features;
    }

    public function setFeature(Feature $feature): self {
        $this->features[] = $feature;
        return $this;
    }

    public function unsetFeature(Feature $feature): self {
        foreach($this->features as $key => $sotredFeatures) {
            if($sotredFeatures->getId() == $feature->getId()) {
                unset($this->features[$key]);
            }
        }

        return $this;
    }

    public static function exists(string $mail) {
        $db = new Database();
        $result = $db->query("SELECT * FROM user WHERE mail = ?", [$mail])->fetch(PDO::FETCH_ASSOC);
        return !empty($result);
    }

    public static function findByEmail($mail) {
        self::initializeDatabase();
        $stmt = self::$db->prepare("SELECT * FROM user WHERE mail = ?");
        $stmt->execute([$mail]);
        $resultUser = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt = self::$db->prepare("SELECT l.language_name FROM user_language AS l WHERE l.user_mail = ?");
        $stmt->execute([$mail]);
        $resultLanguages = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = self::$db->prepare("SELECT f.feature_id FROM user_features AS f WHERE f.user_mail = ?");
        $stmt->execute([$mail]);
        $resultFeatures = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($resultUser) {
            $user = new User(
                $resultUser['mail'],
                $resultUser['firstname'],
                $resultUser['lastname'],
                $resultUser['job'],
                $resultUser['description']
            );
            $user
                ->setPassword($resultUser['pass'])
                ->setAdmin($resultUser['admin'])
                ->setImgPath($resultUser['img_path']);

            if($resultLanguages) {
                foreach($resultLanguages as $data) {
                    $lang = new Lang($data['language_name']);
                    $user->setLanguage($lang);
                }
            }
            if($resultFeatures) {
                foreach($resultFeatures as $data) {
                    $feature = Feature::findById($data['feature_id']);
                    $user->setFeature($feature);
                }
            }
            return $user;
        }

        return null;
    }

    public static function findAllAuthors(): array {
        self::initializeDatabase();
        $sql = "SELECT DISTINCT u.* FROM user u JOIN article a ON u.mail = a.user_mail";
        $stmt = self::$db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function clearLanguages(): self {
        $db = new Database();
        $db->query("DELETE FROM user_language WHERE user_mail = ?", [$this->getEmail()]);
        $this->languages = [];
        return $this;
    }

    public function clearFeatures(): self {
        self::initializeDatabase();
        $stmt = self::$db->prepare("DELETE FROM user_features WHERE user_mail = ?");
        $stmt->execute([$this->getEmail()]);
        return $this;
    }

    public function save() {
        self::initializeDatabase();
        self::$db = new Database();
        if (self::exists($this->getEmail())) {
            self::$db->query("UPDATE user SET pass = ?, firstname = ?, lastname = ?, job = ?, description = ?, img_path = ?, admin = ? WHERE mail = ?", [
                $this->getPassword(),
                $this->getFirstname(),
                $this->getLastname(),
                $this->getJob(),
                $this->getDescription(),
                '',
                $this->isAdmin(),
                $this->getEmail()
            ]);
        } else {
            // Insert
            self::$db->query("INSERT INTO user (mail, pass, firstname, lastname, job, description, img_path, admin) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [
                $this->getEmail(),
                $this->getPassword(),
                $this->getFirstname(),
                $this->getLastname(),
                $this->getJob(),
                $this->getDescription(),
                '',
                $this->isAdmin()
            ]);
        }

        foreach($this->getLanguages() as $key => $lang) {
            // Vérifier si le couple user_mail/language_name existe déjà
            if (!$this->existsUserLanguage($this->getEmail(), $lang->getName())) {
                self::$db->query("INSERT INTO user_language (user_mail, language_name) VALUES (?, ?)", [
                    $this->getEmail(),
                    $lang->getName()
                ]);
            }
        }

        foreach($this->getFeatures() as $key => $feature) {
            // Vérifier si le couple user_mail/language_name existe déjà
            if (!$this->existsUserFeature($this->getEmail(), $feature->getId())) {
                self::$db->query("INSERT INTO user_features (user_mail, feature_id) VALUES (?, ?)", [
                    $this->getEmail(),
                    $feature->getId()
                ]);
            }
        }
    }

    private function existsUserLanguage($email, $languageName) {
        $result = self::$db->query("SELECT COUNT(*) AS count FROM user_language WHERE user_mail = ? AND language_name = ?", [$email, $languageName]);
        $count = $result->fetchColumn();

        return $count > 0;
    }

    private function existsUserFeature($email, $featureId) {
        $result = self::$db->query("SELECT COUNT(*) AS count FROM user_features WHERE user_mail = ? AND feature_id = ?", [$email, $featureId]);
        $count = $result->fetchColumn();
        
        return $count > 0;
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
