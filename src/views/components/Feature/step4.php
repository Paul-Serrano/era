<div class="progress-bar-container w-full h-2 bg-primary bg-opacity-25 rounded-full my-4">
    <div id="progress-bar" class="h-2 bg-primary rounded-full w-[25%]"></div>
</div>
<div class="step flex flex-col justify-evenly w-full">
    <button class="relative left-0 my-5" onclick="prevStep()"><img src="../../assets/img/back-feature.png" alt=""></button>
    <h2 class="text-lg font-bold my-5">Comment vous identifiez-vous ?</h2>
    
    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="radio" name="gender" value="homme">
            <p class="ml-2">Homme</p>
        </div>
        <img class="w-[30px]" src="../../assets/img/male.png" alt="">
    </label>
    
    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="radio" name="gender" value="femme">
            <p class="ml-2">Femme</p>
        </div>
        <img class="w-[30px]" src="../../assets/img/female.png" alt="">
    </label>
    
    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput lg:w-1/2">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="radio" name="gender" value="non-binaire">
            <p class="ml-2">Non Binaire</p>
        </div>
        <img class="w-[30px]" src="../../assets/img/binary.png" alt="">
    </label>
    
    <button class="py-3 bg-black font-bold text-white rounded-full w-full my-5 mx-auto flex items-center justify-evenly px-20 lg:w-1/4 lg:mr-0 lg:py-2" onclick="nextStep()">
        <p>Suivant</p>
        <img src="../../assets/img/arrow-button.png" alt="">
    </button>
</div>
