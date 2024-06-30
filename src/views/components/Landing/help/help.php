<!-- public/components/carousel-help.php -->
<div class="carousel-help-component flex flex-col items-center py-5">
    <h3 class="text-2xl font-bold leading-8 mt-16 lg:w-2/3 lg:text-start">Besoin d'un coup de pouce ?</h3>
    <p class="font-thin text-lg my-4 leading-6 lg:w-2/3 lg:text-start lg:text-xl">Nos parrains et marraines sont là pour vous accompagner et vous conseiller à chaque étape de votre aventure !</p>
    <div class="carousel-help relative overflow-hidden w-full my-10 lg:flex lg:justify-around">
        <div class="carousel-help-inner flex transition-transform duration-300 h-full lg:w-full lg:space-x-4 lg:justify-evenly lg:h-[480px]">
            <div class="carousel-help-item w-full flex-shrink-0 flex justify-center lg:w-[20%]">
                <div class="flex flex-col bg-white px-5 lg:justify-between lg:px-0">
                    <div>
                        <img class="my-4 w-2/3 m-auto lg:mx-auto lg:my-4" src="../../assets/img/pola-ted.png" alt="">
                        <h4 class="text-xl font-bold">Responsable marketing</h4>
                        <p class="font-light leading-6 text-xl my-6 lg:text-md lg:text-start">Hey, cela fait 2 ans que je suis digital nomade à Bali. 
                        Je pratique le surf et passe mon temps en after work organisé par Mouv’up ! </p>
                    </div>
                    <div class="flex items-center justify-between lg:justify-start">
                        <span>Français</span>
                        <span class="lg:mx-2">&#8226;</span>
                        <span>Anglais</span>
                        <span class="lg:mx-2">&#8226;</span>
                        <span>Chinois</span>
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex lg:w-[2px] lg:h-full lg:bg-black lg:border-black lg:border lg:m-0"></div>
            <div class="carousel-help-item w-full flex-shrink-0 flex justify-center lg:w-[20%]">
                <div class="flex flex-col bg-white px-5 lg:justify-between lg:px-0">
                    <div>
                        <img class="my-4 w-2/3 m-auto lg:mx-auto lg:my-4" src="../../assets/img/pola-charlot.png" alt="">
                        <h4 class="text-xl font-bold">Directrice artistique</h4>
                        <p class="font-light leading-6 text-xl my-6 lg:text-md lg:text-start">Hello, Je suis passionnée d’arts et a pour passe temps la photographie ! Je fais partie d’une association qui apprend la photographie à des locaux vietnamien.</p>
                    </div>
                    <div class="flex items-center justify-between lg:justify-start">
                        <span>Français</span>
                        <span class="lg:mx-2">&#8226;</span>
                        <span>Anglais</span>
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex lg:w-[2px] lg:h-full lg:bg-black lg:border-black lg:border lg:m-0"></div>
            <div class="carousel-help-item w-full flex-shrink-0 flex justify-center lg:w-[20%]">
                <div class="flex flex-col bg-white px-5 lg:justify-between lg:px-0">
                    <img class="my-4 w-2/3 m-auto lg:mx-auto lg:my-4" src="../../assets/img/pola-mia.png" alt="">
                    <h4 class="text-xl font-bold">Designer UI/UX</h4>
                    <p class="font-light leading-6 text-xl my-6 lg:text-md lg:text-start">Bonjour, je travaille depuis mon ordi en Australie ! Je fais des rencontres tous les jours et je pars souvent en expéditions dans des paysages incroyables !</p>
                    <div class="flex items-center justify-between lg:justify-start">
                        <span>Français</span>
                        <span class="lg:mx-2">&#8226;</span>
                        <span>Anglais</span>
                        <span class="lg:mx-2">&#8226;</span>
                        <span>Chinois</span>
                    </div>
                </div>
            </div>
        </div>
        <button class="prev-carousel-help absolute left-0 top-1/2 transform -translate-y-1/2 bg-white hidden">Prev</button>
        <button class="next-carousel-help absolute right-0 top-1/2 transform -translate-y-1/2 bg-white hidden">Next</button>
    </div>
    <div class="carousel-help-indicators flex justify-center space-x-2 mt-4 lg:hidden">
        <div class="help-indicator-item w-8 h-2 bg-primary opacity-50 rounded-full"></div>
        <div class="help-indicator-item w-8 h-2 bg-primary opacity-50 rounded-full"></div>
        <div class="help-indicator-item w-8 h-2 bg-primary opacity-50 rounded-full"></div>
    </div>
    <button class="text-white bg-black font-light w-1/2 flex items-center justify-evenly rounded-full py-2 px-4 mt-10 lg:w-[15%]">
        <p>Voir plus</p>
        <img src="../../assets/img/arrow-button.png" alt="why digital nomad">
    </button>
</div>
<script src="/src/views/components/Landing/help/help.js"></script>
