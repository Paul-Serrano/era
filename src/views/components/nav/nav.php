<!-- public/components/nav/nav.php -->
<nav class="bg-white py-6 px-20 font-gothamBook border-b-4 border-secondary">
    <div class="container mx-auto flex justify-between items-center max-w-full">
        <!-- Logo for mobile and desktop -->
        <a href="#" class="text-2xl font-bold lg:order-1 w-[15%]"><img src="../../assets/img/logo.png" alt="logo du site" /></a>
        
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
        <div class="lg:hidden w-[15%]">
            <button id="burger-menu" class="focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile navigation links -->
    <ul id="mobile-nav-links" class="lg:hidden hidden flex-col space-y-2 mt-4">
        <li><a href="#" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark">Destinations</a></li>
        <li><a href="#" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark">Blog</a></li>
        <li><a href="#" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark">Offres</a></li>
        <li><a href="#" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark">Contact</a></li>
        <li><a href="#" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark"><img src="/public/assets/img/cart.png" alt="panier" /></a></li>
        <li><a href="#" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark">Se Connecter</a></li>
    </ul>
</nav>
<script src="/src/views/components/nav/nav.js"></script>
