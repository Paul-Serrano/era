<h2 class="text-xl font-bold my-5">Créer fonctionnalité</h2>
<form method="POST" action="/saveFeature" class="flex flex-col">
    <label for="featureName">Nom</label>
    <input class="border-2 border-black p-2" type="text" id="featureName" name="featureName" required>
    <label for="featureDescription">Description</label>
    <textarea class="border-2 border-black p-2" id="featureDescription" name="featureDescription" required></textarea>
    <label for="featurePrice">Prix en euros</label>
    <input class="border-2 border-black p-2" type="number" id="featurePrice" name="featurePrice" required>
    <label for="featurePosition">Position (dans la liste)</label>
    <input class="border-2 border-black p-2" type="number" id="featurePosition" name="featurePosition">
    <button class="my-5 p-2 bg-secondary text-white font-bold text-center rounded-xl" type="submit">Poster</button>
</form>

<div>
    <h2 class="text-xl font-bold my-5">Liste des fonctionnalités</h2>
    <?php if (!empty($data['features'])): ?>
        <div class="list-disc pl-5">
            <?php foreach ($data['features'] as $feature): ?>
                <div class="my-3">
                    <div class="flex justify-between items-center">
                        <div>
                            <strong>Nom :</strong> <?= htmlspecialchars($feature->getName()) ?><br>
                            <strong>Description :</strong> <?= htmlspecialchars($feature->getDescription()) ?><br>
                            <strong>Prix :</strong> <?= htmlspecialchars($feature->getPrice()) ?> €<br>
                            <strong>Position :</strong> <?= htmlspecialchars($feature->getPosition()) ?>
                        </div>
                        <div class="flex flex-col">
                            <form method="POST" action="/deleteFeature" style="display:inline;">
                                <input type="hidden" name="featureId" value="<?= $feature->getId() ?>">
                                <button type="submit" class="p-2 bg-red-500 text-white rounded">Supprimer</button>
                            </form>
                            <button onclick="showUpdateFeatureForm(`<?= $feature->getId() ?>`, `<?= htmlspecialchars($feature->getName()) ?>`, `<?= htmlspecialchars($feature->getDescription()) ?>`, `<?= htmlspecialchars($feature->getPrice()) ?>`, `<?= htmlspecialchars($feature->getPosition()) ?>`)" class="p-2 bg-secondary text-white rounded">Modifier</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Aucune fonctionnalité trouvée.</p>
    <?php endif; ?>
</div>

<div id="updateFeatureFormContainer" class="hidden flex-col">
    <h2 class="text-xl font-bold my-5">Modifier fonctionnalité</h2>
    <form id="updateFeatureForm" method="POST" action="/updateFeature">
        <input type="hidden" id="updateFeatureId" name="updateFeatureId" value="">
        <label for="updateFeatureName">Nom</label>
        <input class="border-2 border-black p-2" type="text" id="updateFeatureName" name="updateFeatureName" required><br>
        <label for="updateFeatureDescription">Description</label>
        <textarea class="border-2 border-black p-2" id="updateFeatureDescription" name="updateFeatureDescription" required></textarea><br>
        <label for="updateFeaturePrice">Prix en euros</label>
        <input class="border-2 border-black p-2" type="number" id="updateFeaturePrice" name="updateFeaturePrice" required><br>
        <label for="updateFeaturePosition">Position (dans la liste)</label>
        <input class="border-2 border-black p-2" type="number" id="updateFeaturePosition" name="updateFeaturePosition"><br>
        <button class="my-5 p-2 bg-primary text-white font-bold text-center rounded-xl" type="submit">Modifier</button>
    </form>
</div>
