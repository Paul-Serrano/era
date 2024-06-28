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
    private array $features;

    public function __construct() {
        $this->features = $this->findAllFeatures();
    }

    public function index()
    {
        session_start();
        $user = $_SESSION['user'];
        $features = $this->features;
        // Chargez la vue
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

    public function viewFeature(int $id) {
        if ($id) {
            $feature = Feature::findById((int)$id);
            if ($feature) {
                require_once __DIR__ . '/../views/components/header/header.php';
                require_once __DIR__ . '/../views/pages/feature.php';
                require_once __DIR__ . '/../views/components/footer/footer.php';
                return;
            }
        }
        // Gestion d'erreur si l'article n'est pas trouvé
        echo "Article not found";
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