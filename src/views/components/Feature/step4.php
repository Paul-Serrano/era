<div class="step flex flex-col justify-evenly w-full">
    <button class="relative left-0 my-5" onclick="prevStep()"><img src="../../assets/img/back-feature.png" alt=""></button>
    <h2 class="text-lg font-bold my-5">Comment vous identifiez-vous ?</h2>
    
    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="radio" name="gender" value="homme">
            <p class="ml-2">Homme</p>
        </div>
        <img class="relative right-0" src="../../assets/img/male.png" alt="">
    </label>
    
    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="radio" name="gender" value="femme">
            <p class="ml-2">Femme</p>
        </div>
        <img src="../../assets/img/female.png" alt="">
    </label>
    
    <label class="rounded-md border border-featureInput py-2 px-6 my-5 flex justify-between items-center text-featureInput">
        <div class="flex items-center">
            <img src="../../assets/img/radio-button.png" alt="">
            <input class="hidden" type="radio" name="gender" value="non-binaire">
            <p class="ml-2">Non Binaire</p>
        </div>
        <img src="../../assets/img/nonBinary.png" alt="">
    </label>
    
    <button class="py-3 bg-black font-bold text-white rounded-full w-full my-5 mx-auto flex items-center justify-evenly px-20" onclick="nextStep()">
        <p>Suivant</p>
        <img src="../../assets/img/arrow-button.png" alt="">
    </button>
</div>
