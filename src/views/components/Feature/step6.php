<div class="progress-bar-container w-full h-2 bg-primary bg-opacity-25 rounded-full my-4">
    <div id="progress-bar" class="h-2 bg-primary rounded-full w-[42%]"></div>
</div>
<div class="step flex flex-col justify-evenly w-full">
    <button class="relative left-0 my-5" onclick="prevStep()"><img src="../../assets/img/back-feature.png" alt=""></button>
    
    <h2 class="text-lg font-bold my-5">Pratiquez-vous une religion ?</h2>
    
    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="radio" name="religion" value="chrétien">
            <p class="ml-2">Chrétien</p>
        </div>
        <img src="../../assets/img/christianity.png" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="radio" name="religion" value="musulman">
            <p class="ml-2">Musulman</p>
        </div>
        <img src="../../assets/img/muslim.png" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="radio" name="religion" value="juif">
            <p class="ml-2">Juif</p>
        </div>
        <img src="../../assets/img/jewish.png" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="radio" name="religion" value="hindou">
            <p class="ml-2">Hindou</p>
        </div>
        <img src="../../assets/img/hinduism.png" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="radio" name="religion" value="bouddhiste">
            <p class="ml-2">Bouddhiste</p>
        </div>
        <img src="../../assets/img/buddhism.png" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="radio" name="religion" value="sikh">
            <p class="ml-2">Sikh</p>
        </div>
        <img src="../../assets/img/sikhs.png" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="radio" name="religion" value="athée">
            <p class="ml-2">Athée</p>
        </div>
        <img src="../../assets/img/athe.png" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="radio" name="religion" value="agnostique">
            <p class="ml-2">Agnostique</p>
        </div>
        <img src="../../assets/img/agnostic.png" alt="">
    </label>

    <button class="py-3 bg-black font-bold text-white rounded-full w-full my-5 mx-auto flex items-center justify-evenly px-20 lg:w-1/4 lg:mr-0 lg:py-2" onclick="nextStep()">
        <p>Suivant</p>
        <img src="../../assets/img/arrow-button.png" alt="">
    </button>
</div>
