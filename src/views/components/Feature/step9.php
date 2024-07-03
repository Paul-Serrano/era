<div class="progress-bar-container w-full h-2 bg-primary bg-opacity-25 rounded-full my-4">
    <div id="progress-bar" class="h-2 bg-primary rounded-full w-[69%]"></div>
</div>
<div class="step flex flex-col justify-evenly w-full">
    <button class="relative left-0 my-5" onclick="prevStep()"><img src="../../assets/img/back-feature.png" alt=""></button>
    
    <h2 class="text-lg font-bold my-5">Quels transports utilisez-vous ?</h2>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="checkbox" name="transport" value="avion">
            <p class="ml-2">Avion</p>
        </div>
        <img src="../../assets/img/plane.png" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="checkbox" name="transport" value="train">
            <p class="ml-2">Train</p>
        </div>
        <img src="../../assets/img/train.png" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="checkbox" name="transport" value="voiture">
            <p class="ml-2">Voiture</p>
        </div>
        <img src="../../assets/img/car.png" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="checkbox" name="transport" value="bus">
            <p class="ml-2">Bus</p>
        </div>
        <img src="../../assets/img/bus.png" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="checkbox" name="transport" value="vélo">
            <p class="ml-2">Vélo</p>
        </div>
        <img src="../../assets/img/bike.png" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="checkbox" name="transport" value="marche">
            <p class="ml-2">Marche</p>
        </div>
        <img src="../../assets/img/walk.png" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="checkbox" name="transport" value="transports en commun">
            <p class="ml-2">Transports en commun</p>
        </div>
        <img src="../../assets/img/subway.png" alt="">
    </label>
    
    <button class="py-3 bg-black font-bold text-white rounded-full w-full my-5 mx-auto flex items-center justify-evenly px-20 lg:w-1/4 lg:mr-0 lg:py-2" onclick="nextStep()">
        <p>Suivant</p>
        <img src="../../assets/img/arrow-button.png" alt="">
    </button>
</div>
