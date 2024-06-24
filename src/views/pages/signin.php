<?php

$error = isset($_GET['error']) ? $_GET['error'] : '';

// Fonction pour afficher le message d'erreur
function displayErrorMessage($error) {
    switch ($error) {
        case 'passNoMatch':
            echo '<p style="color: red;">Les mots de passe ne correspondent pas.</p>';
            break;
        // Ajoutez d'autres cas ici pour d'autres types d'erreurs si nécessaire
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
<div class="w-[80%] mx-auto my-10 flex flex-col">
    <form action="/register" method="POST">
        <h2 class="ml-5 font-bold text-xl text-secondary my-5">Inscription</h2>
        <div class="flex flex-col my-5">
            <label for="email">Email</label>
            <input class="border-2 border-black my-2 rounded-md p-2" type="email" id="email" name="email" required>
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
            <input class="border-2 border-black my-2 rounded-md p-2" type="text" id="firstname" name="firstname" required>
        </div>
        <div class="flex flex-col my-5">
            <label for="lastname">Nom de famille</label>
            <input class="border-2 border-black my-2 rounded-md p-2" type="text" id="lastname" name="lastname" required>
        </div>
        <div class="flex flex-col my-5">
            <label for="job">Secteur d'activité</label>
            <input class="border-2 border-black my-2 rounded-md p-2" type="text" id="job" name="job" required>
        </div>
        <div class="flex flex-col my-5">
            <label for="description">Description</label>
            <input class="border-2 border-black my-2 rounded-md p-2" id="description" name="description" type="textarea" required>
        </div>
        <div class="flex flex-col my-5">
            <label for="lang">Languages</label>
            <select name="lang" id="lang">
                <option value="">Choissez les langues parlées</option>
            </select>
        </div>
        <div class="">
            <button type="submit" class="bg-secondary font-bold text-white px-2 py-4 my-2 w-full rounded-full">Inscription</button>
        </div>
    </form>
    <div class="flex flex-col">
        <a href="/login" class="bg-secondary font-bold text-white px-2 py-4 my-10 w-full rounded-full text-center">Déjà un compte ? connectez vous !</a>
    </div>
</div>



