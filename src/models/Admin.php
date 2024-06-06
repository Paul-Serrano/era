<?php

namespace Src\Models;

require_once __DIR__ . '/../models/Database.php';

use Src\Models\Database;

class Admin {

    private $adminKey;
    private $db;

    public function __construct(string $adminKey = null) {
        $this->db = Database::getPdo();
        if ($adminKey !== null) {
            $this->adminKey = $adminKey;
        }
    }

    public function getAdminKey() : string {
        if ($this->adminKey === null) {
            $sql = "SELECT admin_key FROM admin_key LIMIT 1";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch();
            $this->adminKey = $result ? $result['admin_key'] : null;
        }
        return $this->adminKey;
    }

    public function setAdminKey(string $adminKey): self {
        $this->adminKey = $adminKey;
        $sql = "UPDATE admin_key SET admin_key = :adminKey";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':adminKey', $this->adminKey);
        $stmt->execute();
        return $this;
    }
}
