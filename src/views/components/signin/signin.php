<h2>Inscription</h2>
<form action="index.php?action=register" method="post">
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <label for="firstname">Prénom:</label>
        <input type="text" id="firstname" name="firstname" required>
    </div>
    <div>
        <label for="lastname">Nom:</label>
        <input type="text" id="lastname" name="lastname" required>
    </div>
    <div>
        <label for="job">Profession:</label>
        <input type="text" id="job" name="job" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
    </div>
    <div>
        <label for="img_path">Chemin de l'image:</label>
        <input type="text" id="img_path" name="img_path">
    </div>
    <div>
        <button type="submit">S'inscrire</button>
    </div>
</form>