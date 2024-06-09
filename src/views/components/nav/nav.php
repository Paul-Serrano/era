<!-- public/components/nav/nav.php -->
<nav class="bg-white py-6 px-10 font-gothamBook lg:border-secondary relative">
    <div class="container mx-auto flex justify-between items-center max-w-full">
        <!-- Logo for mobile and desktop -->
        <a href="#" class="w-[20%] lg:order-1"><img class="w-full" src="../../assets/img/logo.png" alt="logo du site" /></a>
        
        <!-- Menu for desktop -->
        <ul class="hidden lg:flex lg:order-2 lg:w-[60%] lg:justify-evenly space-x-4">
            <li class="flex items-center m-0"><a href="#" class="hover:text-secondary italic">Destinations</a> <img src="../../assets/img/drop-down-arrow.png" alt="fleche menu déroulent" /></li>
            <li class="flex items-center m-0"><a href="#" class="hover:text-secondary italic">Blog</a></li>
            <li class="flex items-center m-0"><a href="#" class="hover:text-secondary italic">Offres</a></li>
            <li class="flex items-center m-0"><a href="#" class="hover:text-secondary italic">Contact</a></li>
            <li class="flex items-center m-0"><a href="#" class="hover:text-secondary"><img src="../../assets/img/cart.png" alt="panier" /></a></li>
            <button class="rounded-lg flex items-center bg-secondary w-[25%] py-2 px-5"><p class="uppercase italic text-center w-full">Se Connecter</p></button>
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
    <ul id="mobile-nav-links" class="bg-white lg:hidden hidden flex-col items-center space-y-2 mt-4 absolute left-0 w-full z-50">
        <li class="w-3/4"><a href="#" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark">Destinations</a></li>
        <li class="w-3/4"><a href="#" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark">Blog</a></li>
        <li class="w-3/4"><a href="#" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark">Offres</a></li>
        <li class="w-3/4"><a href="#" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark">Contact</a></li>
        <li class="w-3/4"><a href="#" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark"><img src="../../assets/img/cart.png" alt="panier" /></a></li>
        <li class="w-3/4"><a href="#" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark">Se Connecter</a></li>
    </ul>
</nav>
<script src="/src/views/components/nav/nav.js"></script>
