<?php

namespace Src\Controllers;

require_once __DIR__ . '/../models/Feature.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/Tool.php';

use Src\Models\Feature;
use Src\Models\User;
use Src\Repository\Tool\Tool;

class PanelUserController extends Tool
{
    private User $user;
    private array $features;
    private array $userFeatures;

    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION ? $this->user = $_SESSION['user'] : $this->user = User::findByEmail('test@gmail.com');
        $this->features = $this->findAllFeatures();
        $this->userFeatures = $this->findFeatureByUser($this->user);
    }

    public function index()
    {
        $user = $this->user;
        $features = $this->features;
        $userFeatures = $this->userFeatures;
        ob_start();
        require __DIR__ . '/../views/components/header/header.php';
        require __DIR__ . '/../views/pages/panelUser.php';
        return ob_get_clean();
    }

    public function findAllFeatures(): array {
        // Récupérer toutes les fonctionnalités depuis la base de données
        $data = Feature::findAll();
        $features = [];
        foreach($data as $featureData) {
            $feature = new Feature($featureData->getName(), $featureData->getDescription(), $featureData->getPrice());
            $feature->setId($featureData->getId());
            $feature->setPosition($featureData->getPosition());
            $features[] = $feature;
        }

        $this->features = $features;
        return $this->features;
    }

    public function findFeatureByUser($user) {
        $features = $user->getFeatures();
        return $features;
    }

    public function viewFeature(int $id) {
        if ($id) {
            $feature = Feature::findById((int)$id);
            if ($feature) {
                require_once __DIR__ . '/../views/components/header/header.php';
                require_once __DIR__ . '/../views/pages/feature.php';
                return;
            }
        }
        echo "Feature not found";
    }

    public function viewUserFeature(int $id) {
        if ($id && $id == 1) {
            $feature = Feature::findById((int)$id);
            if ($feature) {
                // Tool::dd($this->user->getFirstname());
                require_once __DIR__ . '/../views/components/header/header.php';
                require_once __DIR__ . '/../views/pages/userFeature.php';
                return;
            }
        }
        else {
            header('Location: /panelUser?error=featureNotFinished');
        }
        echo "Feature not found";
    }

    public function subscribeFeature(array $data)
    {
        $user = User::findByEmail($data['userMail']);
        $feature = Feature::findById($data['featureId']);
        $linkExists = false;
        foreach($user->getFeatures() as $storedFeature) {
            if($storedFeature->getId() == $data['featureId']) {
                $linkExists = true;
                break;
            }
        }
        if (!$linkExists) {
            $user->clearFeatures();
            $user->setFeature($feature);
            $user->save();
    
            header('Location: /panelUser?success=subscribeFeature&featureName='.$feature->getName());
            exit;
        } else {
            header('Location: /panelUser?error=featureAlreadySubscribed');
            exit;
        }
    }

}