<?php 

$mail = isset($_GET['mail']) ? $_GET['mail'] : '';

?>


<div class="w-[80%] mx-auto my-10">
    <form action="/connect" method="post">
    <h2 class="ml-5 font-bold text-xl text-secondary my-5">Log In</h2>
        <div class="flex flex-col my-5">
            <label for="email">Email:</label>
            <input class="border-2 border-black my-2 rounded-md p-2" type="email" id="email" name="email" value="<?= $mail ?>" required>
        </div>
        <div class="flex flex-col my-5">
            <label for="password">Mot de passe:</label>
            <input class="border-2 border-black my-2 rounded-md p-2 focus-visible:border-secondary" type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit" class="bg-secondary font-bold text-white px-2 py-4 my-2 w-full rounded-full">Connectez vous</button>
        </div>
    </form>
    <div class="bg-secondary w-full my-10 h-[5px]"></div>
    <div class="flex flex-col">
        <h2 class="ml-5 font-bold text-xl text-secondary mb-5">Créer un compte</h2>
        <p class="my-2">Vous n’avez pas de compte ? Créer un compte personnalisé à votre besoin  </p>
        <a href="/signin" class="bg-secondary font-bold text-white px-2 py-4 my-2 w-full rounded-full text-center">Pas de compte ? Inscrivez vous !</a>
    </div>
</div>


