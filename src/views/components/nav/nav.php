<?php
$user = $_SESSION['user'] ?? null;
?>

<!-- public/components/nav/nav.php -->
<nav class="bg-white py-6 px-10 lg:p-12 lg:border-secondary relative">
    <div class="container mx-auto flex justify-between items-center max-w-full">
        <!-- Logo for mobile and desktop -->
        <a href="/" class="w-[20%] lg:order-1"><img class="w-full lg:w-1/3" src="../../assets/img/logo.png" alt="logo du site" /></a>
        
        <!-- Menu for desktop -->
        <ul class="hidden lg:flex lg:order-2 lg:w-[60%] lg:justify-evenly space-x-4">
            <li class="flex items-center m-0"><a href="#" class="hover:text-secondary italic lg:not-italic lg:font-bold">Nos solutions</a> <img src="../../assets/img/drop-down-arrow.png" alt="fleche menu déroulent" /></li>
            <li class="flex items-center m-0"><a href="/blog" class="hover:text-secondary italic lg:not-italic lg:font-bold">Blog</a></li>
            <li class="flex items-center m-0"><a href="#" class="hover:text-secondary italic lg:not-italic lg:font-bold">Nos tarifs</a></li>
            <li class="flex items-center m-0"><a href="#" class="hover:text-secondary italic lg:not-italic lg:font-bold">Contact</a></li>
            
            <?php if($user) : ?>
                <!-- Bouton Mon Compte avec déconnexion -->
                <div class="relative">
                    <ul class="bg-white border border-secondary rounded-lg py-2 px-4 shadow-lg">
                        <li><a href="/account">Mon Compte</a></li>
                        <li><a href="/signout">Déconnexion</a></li>
                        <?php if($user->isAdmin()) : ?>
                            <li><a href="/admin">Panel Admin</a></li>
                        <?php else : ?>
                            <li><a href="/panelUser">Panel User</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php else : ?>
                <!-- Bouton Se Connecter -->
                <a href="/login" class="rounded-lg flex items-center bg-secondary w-[25%] py-2 px-5 lg:rounded-2xl lg:py-3">
                    <p class="uppercase italic text-center w-full lg:text-white lg:not-italic lg:font-bold">Se Connecter</p>
                </a>
            <?php endif; ?>
        </ul>
        
        <!-- Burger menu for mobile -->
        <div class="flex justify-end items-center lg:hidden w-1/3">
            <button id="burger-menu" class="focus:outline-none">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile navigation links -->
    <ul id="mobile-nav-links" class="bg-white lg:hidden hidden flex-col items-center space-y-2 mt-4 absolute left-0 w-full z-50 py-5 border-b-8 border-secondary">
        <li class="w-3/4 flex"><a href="#" class="block text-center p-2 text-secondary rounded hover:bg-secondary-dark text-xl">Destinations</a></li>
        <li class="w-3/4 flex"><a href="/blog" class="block text-center p-2 text-secondary rounded hover:bg-secondary-dark text-xl">Blog</a></li>
        <li class="w-3/4 flex"><a href="#" class="block text-center p-2 text-secondary rounded hover:bg-secondary-dark text-xl">Offres</a></li>
        <li class="w-3/4 flex"><a href="#" class="block text-center p-2 text-secondary rounded hover:bg-secondary-dark text-xl">Contact</a></li>
        <?php if($user) : ?>
            <li class="w-3/4 flex"><a href="/account" class="block text-center p-2 text-secondary rounded hover:bg-secondary-dark text-xl">Mon Compte</a></li>
            <li class="w-3/4 flex"><a href="/signout" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark text-xl w-2/3">Déconnexion</a></li>
            <?php if($user->isAdmin()): ?>
                <li class="w-3/4 flex"><a href="/admin" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark text-xl w-2/3">Panel Admin</a></li>
            <?php else : ?>
                <li class="w-3/4 flex"><a href="/panelUser" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark text-xl w-2/3">Panel User</a></li>
            <?php endif; ?>
        <?php else : ?>
            <li class="w-3/4 flex"><a href="/login" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark text-xl w-2/3">Se Connecter</a></li>
        <?php endif; ?>
    </ul>
</nav>
<script src="/src/views/components/nav/nav.js"></script>
