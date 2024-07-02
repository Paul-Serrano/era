<?php
?>

<div class="w-[80%] mx-auto my-10 flex flex-col">
    <form action="/updateUser" method="POST">
        <h2 class="ml-5 font-bold text-xl text-featureInput my-10">Modifier Données</h2>
        
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="email">Email</label>
            <input class="rounded-md border border-featureInput p-2 mb-5" type="email" id="email" name="email" value="<?= $user->getEmail() ?>" required>
        </div>
        
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="password">Mot de passe</label>
            <input class="rounded-md border border-featureInput p-2 mb-5" type="password" id="password" name="password" required>
        </div>
        
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="passwordVerif">Répétez mot de passe svp</label>
            <input class="rounded-md border border-featureInput p-2 mb-5" type="password" id="passwordVerif" name="passwordVerif" required>
        </div>
        
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="firstname">Prénom</label>
            <input class="rounded-md border border-featureInput p-2 mb-5" type="text" id="firstname" name="firstname" value="<?= $user->getFirstname() ?>" required>
        </div>
        
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="lastname">Nom de famille</label>
            <input class="rounded-md border border-featureInput p-2 mb-5" type="text" id="lastname" name="lastname" value="<?= $user->getLastName() ?>" required>
        </div>
        
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="job">Secteur d'activité</label>
            <input class="rounded-md border border-featureInput p-2 mb-5" type="text" id="job" name="job" value="<?= $user->getJob() ?>" required>
        </div>
        
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="description">Description</label>
            <textarea class="rounded-md border border-featureInput p-2 mb-5 resize-y h-32" id="description" name="description" required><?= $user->getDescription() ?></textarea>
        </div>
        
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="lang">Langues</label>
            <select class="capitalize rounded-md border border-featureInput p-2 mb-5" name="lang" id="lang">
                <option class="capitalize" value="">Choisissez les langues parlées</option>
                <?php foreach ($langs as $lang): ?>
                    <option class="capitalize" value="<?= htmlspecialchars($lang->getName()) ?>"><?= htmlspecialchars($lang->getName()) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div id="new-selected-langs" class="lg:flex lg:space-x-2">
            <?php foreach($userLang as $lang): ?>
                <span class="w-auto capitalize new-selected-tag bg-secondary p-2 rounded-xl text-white font-bold flex items-center my-2"><?= $lang->getName() ?> <button class="ml-2 text-white font-bold">x</button></span>
            <?php endforeach; ?>
        </div>

        <div id="new-hidden-langs-container">
            <?php foreach($userLang as $lang): ?>
                <input type="hidden" name="newSelectedLangs[]" value="<?= $lang->getName() ?>">
            <?php endforeach; ?>
        </div>

        <div>
            <button type="submit" class="py-3 bg-black font-bold text-white rounded-full w-full my-5 mx-auto flex items-center justify-evenly px-10 lg:w-1/3 lg:m-auto lg:my-10">Mise à jour</button>
        </div>
    </form>
</div>
<script src="/src/views/scripts/account.js"></script>
