<!-- public/components/carousel-offer.php -->
<div class="carousel-offer-component flex flex-col items-center py-5">
    <h3 class="text-white text-2xl font-bold leading-8 mt-16 w-1/2 mb-8">Choisis ta formule !</h3>
    <hr class="bg-white border-white border-5 w-full"/>
    <div class="carousel-offer relative overflow-hidden w-full my-10">
        <div class="carousel-offer-inner flex transition-transform duration-300 h-full">
            <div class="carousel-offer-item w-full flex-shrink-0 flex justify-center">
                <div class="flex flex-col py-8 px-20">
                    <h4 class="text-white text-2xl font-bold">Offre Freemium</h4>
                    <p class="text-white font-light">Nos services à partir de</p>
                    <p class="text-white text-4xl font-bold">10€ <span class="text-lg">/ mois</span></p>
                    <p class="text-white font-light py-5">Une approche écoresponsable avec une journée de bénévolat écologique, accès au blog, et un suivi post-voyage réduit incluant un appel téléphonique pour recueillir les retours d’expérience avec un psychologue.</p>
                    <button class="text-white font-light border-2 border-white w-2/3 flex items-center justify-evenly rounded-full py-2 px-4">
                        <p>Voir plus</p>
                        <img src="../../assets/img/arrow-button.png" alt="why digital nomad">
                    </button>
                </div>
            </div>
            <div class="carousel-offer-item w-full flex-shrink-0 flex justify-center">
                <div class="flex flex-col py-8 px-20">
                    <h4 class="text-white text-2xl font-bold">Offre Classique</h4>
                    <p class="text-white font-light">Nos services à partir de</p>
                    <p class="text-white text-4xl font-bold">20€ <span class="text-lg">/ mois</p>
                    <p class="text-white font-light py-5">Inclut l’offre freemium avec, en supplément, l’organisation du voyage (choix du transport), des relations avec les locaux, logement, support sur place, un réseau professionnel avec des offres de travail hebdomadaires, un suivi post-voyage complet, et des informations sur les destinations.</p>
                    <button class="text-white font-light border-2 border-white w-2/3 flex items-center justify-evenly rounded-full py-2 px-4">
                        <p>Voir plus</p>
                        <img src="../../assets/img/arrow-button.png" alt="why digital nomad">
                    </button>
                </div>
            </div>
            <div class="carousel-offer-item w-full flex-shrink-0 flex justify-center">
                <div class="flex flex-col py-8 px-20">
                    <h4 class="text-white text-2xl font-bold">Offre Premium</h4>
                    <p class="text-white font-light">Nos services à partir de</p>
                    <p class="text-white text-4xl font-bold">30€ <spans class="text-lg">/ mois</spans></p>
                    <p class="text-white font-light py-5">Tout de l’offre classique et freemium, plus un accompagnement psychologique hebdomadaire, des activités sociales bihebdomadaires, et un accompagnement pré-voyage.</p>
                    <button class="text-white font-light border-2 border-white w-2/3 flex items-center justify-evenly rounded-full py-2 px-4">
                        <p>Voir plus</p>
                        <img src="../../assets/img/arrow-button.png" alt="why digital nomad">
                    </button>
                </div>
            </div>
        </div>
        <button class="hidden lg:flex prev-carousel-offer absolute left-0 top-1/2 transform -translate-y-1/2 bg-white">Prev</button>
        <button class="hidden lg:flex next-carousel-offer absolute right-0 top-1/2 transform -translate-y-1/2 bg-white">Next</button>
    </div>
    <hr class="bg-white border-white border-5 w-full" />
    <div class="carousel-offer-indicators flex justify-center space-x-2 py-12">
        <div class="offer-indicator-item w-3 h-3 bg-secondary opacity-50 rounded-full"></div>
        <div class="offer-indicator-item w-3 h-3 bg-secondary opacity-50 rounded-full"></div>
        <div class="offer-indicator-item w-3 h-3 bg-secondary opacity-50 rounded-full"></div>
    </div>
</div>
<script src="/src/views/components/offers/offers.js"></script>
