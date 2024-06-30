<form class="w-3/4 flex flex-col mx-auto my-5" action="/getFeature" method="POST">
    <input type="hidden" name="userMail" value="<?= htmlspecialchars($user->getEmail()) ?>">
    <input type="hidden" name="featureId" value="<?= htmlspecialchars($feature->getId()) ?>">
    <h1 class="text-xl font-bold"><?= htmlspecialchars($feature->getName()) ?></h1>
    <p class="my-10"><?= $feature->getDescription() ?></p>
    <button class="rounded-full bg-featureInput p-2 text-center text-white" type="submit">Souscrire pour <?= $feature->getPrice() ?> €</button>

    <div class="underline font-bold my-10">
        <a href="/panelUser">Revenir au panel User</a>
    </div>
</form>
