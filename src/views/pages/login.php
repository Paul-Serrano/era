<?php 

$mail = isset($_GET['mail']) ? $_GET['mail'] : '';

?>


<div class="w-[80%] mx-auto my-10">
    <form action="/connect" method="post">
    <h2 class="ml-5 font-bold text-xl text-featureInput my-10">Log In</h2>
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="email">Email:</label class="text-featureInput">
            <input class="rounded-md border border-featureInput p-2 mb-5" type="email" id="email" name="email" value="<?= $mail ?>" required>
        </div>
        <div class="flex flex-col my-5">
            <label class="text-featureInput" for="password">Mot de passe:</label class="text-featureInput">
            <input class="rounded-md border border-featureInput p-2 mb-5 focus-visible:border-secondary" type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit" class="py-3 bg-black font-bold text-white rounded-full w-full my-5 mx-auto flex items-center justify-evenly px-10 lg:w-1/3 lg:m-auto lg:my-10"><p>Connectez vous</p><img src="../../assets/img/arrow-button.png" alt=""></button>
        </div>
    </form>
    <div class="bg-secondary w-full my-10 h-[5px]"></div>
    <div class="flex flex-col">
        <h2 class="ml-5 font-bold text-xl text-featureInput mb-10">Créer un compte</h2>
        <p class="my-2">Vous n’avez pas de compte ? Créer un compte personnalisé à votre besoin  </p>
        <a href="/signin" class="py-3 bg-black font-bold text-white rounded-full w-full my-5 mx-auto flex items-center justify-evenly px-2 lg:w-1/3 lg:m-auto lg:my-10">Pas de compte ? Inscrivez vous !</a>
    </div>
</div>


