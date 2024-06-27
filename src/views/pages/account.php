<?php

?>

<div class="w-[80%] mx-auto my-10 flex flex-col">
    <form action="/updateUser" method="POST">
        <h2 class="ml-5 font-bold text-xl text-secondary my-5">Modifier Données</h2>
        <div class="flex flex-col my-5">
            <label for="email">Email</label>
            <input class="border-2 border-black my-2 rounded-md p-2" type="email" id="email" name="email" value="<?= $user->getEmail() ?>" required>
        </div>
        <div class="flex flex-col my-5">
            <label for="password">Mot de passe</label>
            <input class="border-2 border-black my-2 rounded-md p-2" type="password" id="password" name="password" required>
        </div>
        <div class="flex flex-col my-5">
            <label for="passwordVerif">Répétez mot de passe svp</label>
            <input class="border-2 border-black my-2 rounded-md p-2" type="password" id="passwordVerif" name="passwordVerif" required>
        </div>
        <div class="flex flex-col my-5">
            <label for="firstname">Prénom</label>
            <input class="border-2 border-black my-2 rounded-md p-2" type="text" id="firstname" name="firstname" value="<?= $user->getFirstname() ?>" required>
        </div>
        <div class="flex flex-col my-5">
            <label for="lastname">Nom de famille</label>
            <input class="border-2 border-black my-2 rounded-md p-2" type="text" id="lastname" name="lastname" value="<?= $user->getLastName() ?>" required>
        </div>
        <div class="flex flex-col my-5">
            <label for="job">Secteur d'activité</label>
            <input class="border-2 border-black my-2 rounded-md p-2" type="text" id="job" name="job" value="<?= $user->getJob() ?>" required>
        </div>
        <div class="flex flex-col my-5">
            <label for="description">Description</label>
            <input class="border-2 border-black my-2 rounded-md p-2" id="description" name="description" value="<?= $user->getDescription() ?>" type="textarea" required>
        </div>
        <div class="flex flex-col my-5">
            <label for="lang">Languages</label>
            <select class="capitalize" name="lang" id="lang">
                <option class="capitalize" value="">Choisissez les langues parlées</option>
                <?php foreach ($langs as $lang): ?>
                    <option class="capitalize" value="<?= htmlspecialchars($lang->getName()) ?>"><?= htmlspecialchars($lang->getName()) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div id="new-selected-langs">
            <?php foreach($userLang as $lang): ?>
                <span class="capitalize new-selected-tag bg-secondary p-2 rounded-xl text-white font-bold"><?= $lang->getName() ?> <button>x</button></span>
            <?php endforeach; ?>
        </div>

        <div id="new-hidden-langs-container">
            <?php foreach($userLang as $lang): ?>
                <input type="hidden" name="newSelectedLangs[]" value="<?= $lang->getName() ?>">
            <?php endforeach; ?>
        </div>

        <div class="">
            <button type="submit" class="bg-secondary font-bold text-white px-2 py-4 my-2 w-full rounded-full">Mise à jour</button>
        </div>
    </form>
</div>
<script src="/src/views/scripts/account.js"></script>