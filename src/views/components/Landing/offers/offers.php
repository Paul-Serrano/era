<!-- public/components/carousel-offer.php -->
<div class="carousel-offer-component flex flex-col items-center py-5">
    <h3 class="text-white text-2xl font-bold leading-8 mt-16 w-1/2 mb-8 lg:hidden">Choisis ta formule !</h3>
    <hr class="bg-white border-white border-5 w-full lg:hidden"/>
    <div class="carousel-offer relative overflow-hidden w-full my-10 lg:flex lg:justify-around lg:h-[600px]">
        <div class="carousel-offer-inner flex transition-transform duration-300 h-full lg:w-[90%] lg:space-x-4 lg:m-auto lg:justify-between">
            <div class="carousel-offer-item w-full flex-shrink-0 flex justify-center lg:w-[30%] lg:border-white lg:border lg:p-2 lg:mx-2 lg:rounded-2xl">
                <div class="flex flex-col py-8 px-20 lg:px-10 lg:justify-between">
                    <div>
                        <h4 class="text-white text-2xl font-bold lg:text-2xl">Formule Freemium</h4>
                        <p class="text-white font-light">Nos services à partir de</p>
                        <p class="text-white text-4xl font-bold lg:mt-8">10€ <span class="text-lg">/ mois</span></p>
                        <p class="text-white font-light py-5 lg:mt-8">Une approche écoresponsable avec une journée de bénévolat écologique, accès au blog, et un suivi post-voyage réduit incluant un appel téléphonique pour recueillir les retours d’expérience avec un psychologue.</p>
                    </div>
                    <button class="text-white font-light border-2 border-white w-2/3 flex items-center justify-evenly rounded-full py-2 px-4 lg:relative lg:bottom-0">
                        <p>Voir plus</p>
                        <img src="../../assets/img/arrow-button.png" alt="why digital nomad">
                    </button>
                </div>
            </div>
            <div class="carousel-offer-item w-full flex-shrink-0 flex justify-center lg:w-[30%] lg:border-white lg:border lg:p-2 lg:mx-2 lg:rounded-2xl">
                <div class="flex flex-col py-8 px-20 lg:px-10">
                    <div>
                        <h4 class="text-white text-2xl font-bold">Offre Classique</h4>
                        <p class="text-white font-light">Nos services à partir de</p>
                        <p class="text-white text-4xl font-bold lg:mt-8">20€ <span class="text-lg">/ mois</p>
                        <p class="text-white font-light py-5 lg:mt-8">Inclut l’offre freemium avec, en supplément, l’organisation du voyage (choix du transport), des relations avec les locaux, logement, support sur place, un réseau professionnel avec des offres de travail hebdomadaires, un suivi post-voyage complet, et des informations sur les destinations.</p>
                    </div>
                    <button class="text-white font-light border-2 border-white w-2/3 flex items-center justify-evenly rounded-full py-2 px-4 lg:relative lg:bottom-0">
                        <p>Voir plus</p>
                        <img src="../../assets/img/arrow-button.png" alt="why digital nomad">
                    </button>
                </div>
            </div>
            <div class="carousel-offer-item w-full flex-shrink-0 flex justify-center lg:w-[30%] lg:border-white lg:border lg:p-2 lg:mx-2 lg:rounded-2xl">
                <div class="flex flex-col py-8 px-20 lg:px-10 lg:justify-between">
                    <div>
                        <h4 class="text-white text-2xl font-bold">Offre Premium</h4>
                        <p class="text-white font-light">Nos services à partir de</p>
                        <p class="text-white text-4xl font-bold lg:mt-8">30€ <spans class="text-lg">/ mois</spans></p>
                        <p class="text-white font-light py-5 lg:mt-8">Tout de l’offre classique et freemium, plus un accompagnement psychologique hebdomadaire, des activités sociales bihebdomadaires, et un accompagnement pré-voyage.</p>
                    </div>
                    <button class="text-white font-light border-2 border-white w-2/3 flex items-center justify-evenly rounded-full py-2 px-4">
                        <p>Voir plus</p>
                        <img src="../../assets/img/arrow-button.png" alt="why digital nomad">
                    </button>
                </div>
            </div>
        </div>
        <button class="prev-carousel-offer absolute left-0 top-1/2 transform -translate-y-1/2 bg-white hidden">Prev</button>
        <button class="next-carousel-offer absolute right-0 top-1/2 transform -translate-y-1/2 bg-white hidden">Next</button>
    </div>
    <hr class="bg-white border-white border-5 w-full lg:hidden" />
    <div class="carousel-offer-indicators flex justify-center space-x-2 py-12 lg:hidden">
        <div class="offer-indicator-item w-3 h-3 bg-secondary opacity-50 rounded-full"></div>
        <div class="offer-indicator-item w-3 h-3 bg-secondary opacity-50 rounded-full"></div>
        <div class="offer-indicator-item w-3 h-3 bg-secondary opacity-50 rounded-full"></div>
    </div>
</div>
<script src="/src/views/components/Landing/offers/offers.js"></script>
