<!-- public/components/carousel.php -->
<div class="carousel-component flex flex-col items-center bg-[radial-gradient(circle, #000000 0%, #666666 100%)] h-[500px] py-5">
    <h3 class="text-3xl italic font-bold h-[10%]">Ce que nous sommes</h3>
    <div class="carousel relative overflow-hidden w-1/2 my-10 h-[80%]">
        <div class="carousel-inner flex transition-transform duration-300 w-1/2 h-full">
            <div class="carousel-item w-full flex-shrink-0 flex justify-center h-[80%]">
                <div class="flex flex-col items-center bg-white rounded-lg p-4 w-[250px]">
                    <h4 class="">Engagés</h4>
                    <img class="my-5" src="../../assets/img/blank-img.png" alt="">
                    <p class="text-justify">On est super engagés pour l’environnement et on fait de notre mieux pour réduire au max notre empreinte carbone ! </p>
                </div>
            </div>
            <div class="carousel-item w-full flex-shrink-0 flex justify-center h-[80%]">
            <div class="flex flex-col items-center bg-white rounded-lg p-4 w-[300px]">
                    <h4 class="">Engagés</h4>
                    <img class="my-5" src="../../assets/img/blank-img.png" alt="">
                    <p class="text-justify">On est super engagés pour l’environnement et on fait de notre mieux pour réduire au max notre empreinte carbone ! </p>
                </div>
            </div>
            <div class="carousel-item w-full flex-shrink-0 flex justify-center h-[80%]">
            <div class="flex flex-col items-center bg-white rounded-lg p-4 w-[250px]">
                    <h4 class="">Engagés</h4>
                    <img class="my-5" src="../../assets/img/blank-img.png" alt="">
                    <p class="text-justify">On est super engagés pour l’environnement et on fait de notre mieux pour réduire au max notre empreinte carbone ! </p>
                </div>
            </div>
        </div>
        <button class="prev-carousel absolute left-0 top-1/2 transform -translate-y-1/2 bg-white">Prev</button>
        <button class="next-carousel absolute right-0 top-1/2 transform -translate-y-1/2 bg-white">Next</button>
    </div>
</div>
<script src="/src/views/components/carousel/carousel.js"></script>
