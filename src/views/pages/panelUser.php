<?php

?>

<div>
    <div>
        <h2>Bonjour <?= $user->getFirstname() ?></h2>
        <p>Welcome back and let's create your next grand adventure!</p>
    </div>
    <div>
    <?php if ($features): ?>
        <div class="list-disc pl-5">
            <?php foreach ($features as $feature): ?>
                <div class="my-3">
                    <div class="flex justify-between items-center">
                        <div>
                            <strong>Nom :</strong> <?= htmlspecialchars($feature->getName()) ?><br>
                            <strong>Description :</strong> <?= htmlspecialchars($feature->getDescription()) ?><br>
                            <strong>Prix :</strong> <?= htmlspecialchars($feature->getPrice()) ?> €<br>
                            <strong>Position :</strong> <?= htmlspecialchars($feature->getPosition()) ?>
                        </div>
                        <a class="bg-secondary text-white py-1 w-2/3 text-center my-1" href="/feature?id=<?= $feature->getId();?>">Voir plus</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Aucune fonctionnalité trouvée.</p>
    <?php endif; ?>
    </div>
</div>