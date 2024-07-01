<div class="progress-bar-container w-full h-2 bg-primary bg-opacity-25 rounded-full my-4">
    <div id="progress-bar" class="h-2 bg-primary rounded-full w-[51%]"></div>
</div>
<div class="step flex flex-col justify-evenly w-full">
    <button class="relative left-0 my-5" onclick="prevStep()"><img src="../../assets/img/back-feature.png" alt=""></button>
    
    <h2 class="text-lg font-bold my-5">Avez-vous des problèmes de santé ?</h2>
    
    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="checkbox" name="health" value="aucun">
            <p class="ml-2">Aucun problème de santé</p>
        </div>
        <img src="" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="checkbox" name="health" value="handicap physique">
            <p class="ml-2">Handicap physique</p>
        </div>
        <img src="" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="checkbox" name="health" value="handicap mental">
            <p class="ml-2">Handicap mental</p>
        </div>
        <img src="" alt="">
    </label>

    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="checkbox" name="health" value="maladie chronique">
            <p class="ml-2">Maladie chronique</p>
        </div>
        <img src="" alt="">
    </label>

    <button class="py-3 bg-black font-bold text-white rounded-full w-full my-5 mx-auto flex items-center justify-evenly px-20 lg:w-1/4 lg:mr-0 lg:py-2" onclick="nextStep()">
        <p>Suivant</p>
        <img src="../../assets/img/arrow-button.png" alt="">
    </button>
</div>
