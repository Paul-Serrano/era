<!-- public/components/carousel.php -->
<div class="carousel-component flex flex-col items-center py-5 px-12 md:w-[90%] md:m-auto">
    <h3 class="text-2xl font-bold leading-8 mt-16">Ce que nous sommes</h3>
    <div class="carousel relative overflow-hidden w-full my-10">
        <div class="carousel-inner flex transition-transform duration-300 h-full">
            <div class="carousel-item w-full md:w-1/3 md:mx-[8.83%] md:border-black md:border-2 md:p-5 md:rounded-xl flex-shrink-0 flex justify-center">
                <div class="flex flex-col">
                    <img class="md:h-[200px]" src="../../assets/img/community.png" alt="" />
                    <h4 class="text-xl font-bold md:text-2xl">Une Communauté</h4>
                    <p class="font-light leading-6 text-xl text-justify my-4">Rejoins notre réseau local et international, et partage vos expériences sur notre blog hyper interactif !</p>
                </div>
            </div>
            <div class="carousel-item w-full md:w-1/3 md:mx-[8.83%] md:border-black md:border-2 md:p-5 md:rounded-xl flex-shrink-0 flex justify-center">
                <div class="flex flex-col">
                    <img class="md:h-[200px]" src="../../assets/img/help.png" alt="">
                    <h4 class="text-xl font-bold md:text-2xl">Entraide</h4>
                    <p class="font-light leading-6 text-xl text-justify my-4">On est là pour vous, avec nos psychologues et notre réseau associatif local, pour vous soutenir à fond !</p>
                </div>
            </div>
            <div class="carousel-item w-full md:w-1/3 md:mx-[8.83%] md:border-black md:border-2 md:p-5 md:rounded-xl flex-shrink-0 flex justify-center">
                <div class="flex flex-col">
                    <img class="md:h-[200px]" src="../../assets/img/experience.png" alt="">
                    <h4 class="text-xl font-bold md:text-2xl">Expérience</h4>
                    <p class="font-light leading-6 text-xl text-justify my-4">Plonge dans la culture du pays avec nous, une immersion garantie !</p>
                </div>
            </div>
            <div class="carousel-item w-full md:w-1/3 md:mx-[8.83%] md:border-black md:border-2 md:p-5 md:rounded-xl flex-shrink-0 flex justify-center">
                <div class="flex flex-col">
                    <img class="md:h-[200px]" src="../../assets/img/focused.png" alt="">
                    <h4 class="text-xl font-bold md:text-2xl">Engagé</h4>
                    <p class="font-light leading-6 text-xl text-justify my-4">On est super engagés pour l’environnement et on fait de notre mieux pour réduire au max notre empreinte carbone !</p>
                </div>
            </div>
        </div>
        <button class="hidden lg:flex prev-carousel absolute left-0 top-1/2 transform -translate-y-1/2"><img class="hidden lg:flex" src="../../assets/img/prev-carousel.png" alt=""></button>
        <button class="hidden lg:flex next-carousel absolute right-0 top-1/2 transform -translate-y-1/2"><img class="hidden lg:flex" src="../../assets/img/next-carousel.png" alt=""></button>
    </div>
    <div class="carousel-indicators flex justify-center space-x-2 mb-10">
        <div class="indicator-item w-8 h-2 bg-secondary opacity-50"></div>
        <div class="indicator-item w-8 h-2 bg-secondary opacity-50"></div>
        <div class="indicator-item w-8 h-2 bg-secondary opacity-50"></div>
        <div class="indicator-item w-8 h-2 bg-secondary opacity-50"></div>
    </div>
    <img class="w-full h-full absolute right-0 bottom-0 z-[-1] md:hidden" src="../../assets/img/explainer-net.png" alt="">
</div>
<script src="/src/views/components/carousel/carousel.js"></script>
