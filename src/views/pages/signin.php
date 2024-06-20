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

?>

<h2>Inscription</h2>
<?php 
// Afficher le message d'erreur s'il y en a un
if (!empty($error)) {
    displayErrorMessage($error);
}
?>
<form action="/register" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <label for="passwordVerif">Répétez mot de passe svp</label>
        <input type="password" id="passwordVerif" name="passwordVerif" required>
    </div>
    <div>
        <label for="firstname">Prénom</label>
        <input type="text" id="firstname" name="firstname" required>
    </div>
    <div>
        <label for="lastname">Nom de famille</label>
        <input type="text" id="lastname" name="lastname" required>
    </div>
    <div>
        <label for="job">Secteur d'activité</label>
        <input type="text" id="job" name="job" required>
    </div>
    <div>
        <label for="description">Description</label>
        <input type="textarea" id="description" name="description" required>
    </div>
    <div>
        <label for="lang">Languages</label>
        <select name="lang" id="lang">
            <option value="">Choissez les langues parlées</option>
        </select>
    </div>
    <div>
        <button type="submit">Inscription</button>
    </div>
</form>
<a href="/login">Déjà un compte ? connectez vous !</a>

