<form class="w-3/4 flex flex-col mx-auto my-5" action="/getFeature" method="POST">
    <input type="hidden" name="userMail" value="<?= htmlspecialchars($user->getEmail()) ?>">
    <input type="hidden" name="featureId" value="<?= htmlspecialchars($feature->getId()) ?>">
    <h1><?= htmlspecialchars($feature->getName()) ?></h1>
    <p><?= $feature->getDescription() ?></p>
    <button type="submit">Souscrire pour <?= $feature->getPrice() ?> €</button>

    <div>
        <a href="/panelUser">Revenir au panel User</a>
    </div>
</form>
