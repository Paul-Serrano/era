<!-- public/components/nav/nav.php -->
<nav class="bg-white py-6 px-20 font-gothamBook border-b-4 border-secondary">
    <div class="container mx-auto flex justify-between items-center max-w-full">
        <!-- Logo for mobile and desktop -->
        <a href="#" class="text-2xl font-bold lg:order-3 w-[15%]"><img src="../../assets/img/logo.png" alt="logo du site" /></a>
        
        <!-- Menu for desktop -->
        <ul class="hidden lg:flex lg:order-1 lg:w-[60%] lg:justify-evenly space-x-4">
            <li class="flex items-center m-0"><a href="/admin/update/general" class="admin-link hover:text-secondary italic">General Config</a></li>
            <li class="flex items-center m-0"><a href="/admin/update/blog" class="admin-link hover:text-secondary italic">Blog</a></li>
            <li class="flex items-center m-0"><a href="/admin/update/carousel1" class="admin-link hover:text-secondary italic">Carousel</a></li>
            <li class="flex items-center m-0"><a href="/admin/update/carousel2" class="admin-link hover:text-secondary italic">Carousel2</a></li>
            <button class="rounded-lg flex items-center bg-secondary w-[25%] py-2 px-5"><a href="/" class="uppercase italic text-center w-full" target="_blank">Lien vers le site</a></button>
        </ul>

        <h1 class="rounded-xl order-2 text-xl bg-primary px-5 py-2">Panneau Administrateur</h1>
        
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
        <li><a href="#" class="admin-link block text-center p-2 bg-secondary rounded hover:bg-secondary-dark">General Config</a></li>
        <li><a href="#" class="admin-link block text-center p-2 bg-secondary rounded hover:bg-secondary-dark">Blog</a></li>
        <li><a href="#" class="admin-link block text-center p-2 bg-secondary rounded hover:bg-secondary-dark">Carousel</a></li>
        <li><a href="#" class="admin-link block text-center p-2 bg-secondary rounded hover:bg-secondary-dark">Carousel2</a></li>
        <li><a href="#" class="block text-center p-2 bg-secondary rounded hover:bg-secondary-dark">Lien vers le site</a></li>
    </ul>
</nav>
<script src="/src/views/components/nav/nav.js"></script>
