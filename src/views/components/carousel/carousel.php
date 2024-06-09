<!-- public/components/carousel.php -->
<div class="carousel-component flex flex-col items-center py-5 px-12">
    <h3 class="text-2xl font-bold leading-8 mt-16">Ce que nous sommes</h3>
    <img src="../../assets/img/us.png" alt="">
    <div class="carousel relative overflow-hidden w-full my-10">
        <div class="carousel-inner flex transition-transform duration-300 h-full">
            <div class="carousel-item w-full flex-shrink-0 flex justify-center">
                <div class="flex flex-col bg-white">
                    <h4 class="text-xl font-bold">Communauté</h4>
                    <p class="font-light leading-6 text-xl text-justify my-4">Rejoins notre réseau local et international, et partage vos expériences sur notre blog hyper interactif !</p>
                </div>
            </div>
            <div class="carousel-item w-full flex-shrink-0 flex justify-center">
                <div class="flex flex-col bg-white">
                    <h4 class="text-xl font-bold">Communauté</h4>
                    <p class="font-light leading-6 text-xl text-justify my-4">Rejoins notre réseau local et international, et partage vos expériences sur notre blog hyper interactif !</p>
                </div>
            </div>
            <div class="carousel-item w-full flex-shrink-0 flex justify-center">
                <div class="flex flex-col bg-white">
                    <h4 class="text-xl font-bold">Communauté</h4>
                    <p class="font-light leading-6 text-xl text-justify my-4">Rejoins notre réseau local et international, et partage vos expériences sur notre blog hyper interactif !</p>
                </div>
            </div>
        </div>
        <button class="hidden lg:flex prev-carousel absolute left-0 top-1/2 transform -translate-y-1/2 bg-white">Prev</button>
        <button class="hidden lg:flex next-carousel absolute right-0 top-1/2 transform -translate-y-1/2 bg-white">Next</button>
    </div>
    <div class="carousel-indicators flex justify-center space-x-2 mb-10">
        <div class="indicator-item w-8 h-2 bg-secondary opacity-50"></div>
        <div class="indicator-item w-8 h-2 bg-secondary opacity-50"></div>
        <div class="indicator-item w-8 h-2 bg-secondary opacity-50"></div>
    </div>
    <img class="w-full h-full absolute right-0 bottom-0 z-[-1]" src="../../assets/img/explainer-net.png" alt="">
</div>
<script src="/src/views/components/carousel/carousel.js"></script>
