<?php
$error = isset($_GET['error']) ? $_GET['error'] : '';

// Fonction pour afficher le message d'erreur
function displayErrorMessage($error) {
    switch ($error) {
        case 'passNoMatch':
            echo '<p style="color: red;">Les mots de passe ne correspondent pas.</p>';
            break;
        case 'wrongMail':
            echo '<p style="color: red;">Mail invalide</p>';
            break;
        case 'mailTaken':
            echo '<p style="color: red;">Mail déjà utilisé</p>';
            break;
        default:
            echo '<p style="color: red;">Une erreur inattendue s\'est produite.</p>';
            break;
    }
}

// Afficher le message d'erreur s'il y en a un
if (!empty($error)) {
    displayErrorMessage($error);
}
?>

<div class="w-[80%] mx-auto my-10">
    <form action="/register" method="POST">
        <h2 class="ml-5 font-bold text-xl text-featureInput my-10">Inscription</h2>
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="email">Email</label class="text-featureInput">
            <input class="rounded-md border border-featureInput p-2 mb-5" type="email" id="email" name="email" required>
        </div>
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="password">Mot de passe</label class="text-featureInput">
            <input class="rounded-md border border-featureInput p-2 mb-5" type="password" id="password" name="password" required>
        </div>
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="passwordVerif">Répétez mot de passe svp</label class="text-featureInput">
            <input class="rounded-md border border-featureInput p-2 mb-5" type="password" id="passwordVerif" name="passwordVerif" required>
        </div>
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="firstname">Prénom</label class="text-featureInput">
            <input class="rounded-md border border-featureInput p-2 mb-5" type="text" id="firstname" name="firstname" required>
        </div>
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="lastname">Nom de famille</label class="text-featureInput">
            <input class="rounded-md border border-featureInput p-2 mb-5" type="text" id="lastname" name="lastname" required>
        </div>
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="job">Secteur d'activité</label class="text-featureInput">
            <input class="rounded-md border border-featureInput p-2 mb-5" type="text" id="job" name="job" required>
        </div>
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="description">Description</label class="text-featureInput">
            <input class="rounded-md border border-featureInput p-2 mb-5" id="description" name="description" type="textarea" required>
        </div>
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="lang">Languages</label class="text-featureInput">
            <select class="capitalize rounded-md border border-featureInput p-2 mb-5" name="lang" id="lang">
                <option class="capitalize" value="">Choisissez les langues parlées</option>
                <?php foreach ($langs as $lang): ?>
                    <option class="capitalize" value="<?= htmlspecialchars($lang->getName()) ?>"><?= htmlspecialchars($lang->getName()) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div id="selected-langs" class="lg:flex lg:space-x-2"></div>
        <div id="hidden-langs-container"></div>

        <div>
            <button type="submit" class="py-3 bg-black font-bold text-white rounded-full w-full my-5 mx-auto flex items-center justify-evenly px-10 lg:w-1/3 lg:m-auto lg:my-10">Inscription</button>
        </div>
    </form>
    <div class="bg-secondary w-full my-10 h-[5px]"></div>
    <div class="flex flex-col">
        <h2 class="ml-5 font-bold text-xl text-featureInput mb-10">Connectez vous</h2>
        <p class="my-2">Vous avez déjà un compte ?</p>
        <a href="/login" class="py-3 bg-black font-bold text-white rounded-full w-full my-5 mx-auto flex items-center justify-evenly px-2 lg:w-1/3 lg:m-auto lg:my-10">Page de Connexion</a>
    </div>
</div>
<script src="/src/views/scripts/signin.js"></script>
