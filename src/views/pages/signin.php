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
<form action="/register" method="POST" class="w-3/4 m-auto">
    <h2>Inscription</h2>
    <div>
        <label for="email">Email</label>
        <input class="border-2 border-black my-2" type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input class="border-2 border-black my-2" type="password" id="password" name="password" required>
    </div>
    <div>
        <label for="passwordVerif">Répétez mot de passe svp</label>
        <input class="border-2 border-black my-2" type="password" id="passwordVerif" name="passwordVerif" required>
    </div>
    <div>
        <label for="firstname">Prénom</label>
        <input class="border-2 border-black my-2" type="text" id="firstname" name="firstname" required>
    </div>
    <div>
        <label for="lastname">Nom de famille</label>
        <input class="border-2 border-black my-2" type="text" id="lastname" name="lastname" required>
    </div>
    <div>
        <label for="job">Secteur d'activité</label>
        <input class="border-2 border-black my-2" type="text" id="job" name="job" required>
    </div>
    <div>
        <label for="description">Description</label>
        <input class="border-2 border-black my-2" type="textarea" id="description" name="description" required>
    </div>
    <div>
        <label for="lang">Languages</label>
        <select name="lang" id="lang">
            <option value="">Choissez les langues parlées</option>
        </select>
    </div>
    <div>
        <button type="submit" class="bg-black text-white p-2 my-2">Inscription</button>
    </div>
    <a href="/login" class="underline font-bold">Déjà un compte ? connectez vous !</a>
</form>

