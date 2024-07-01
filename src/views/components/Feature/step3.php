<div class="progress-bar-container w-full h-2 bg-primary bg-opacity-25 rounded-full my-4">
    <div id="progress-bar" class="h-2 bg-primary rounded-full w-[16%]"></div>
</div>
<div class="step flex flex-col items-center justify-evenly lg:flex-row lg:w-full lg:my-5 lg:justify-between">
    <div class="flex flex-col items-start justify-evenly lg:w-1/2">
        <button class="my-5" onclick="prevStep()"><img src="../../assets/img/back-feature.png" alt=""></button>
        <img src="../../assets/img/step3.png" alt="">
        <h2 class="my-5 text-2xl font-bold leading-10">Parlez-nous de votre mode de vie actuel :</h2>
        <p class="mb-10">Dites nous de quoi est fait votre quotidien !</p>
    </div>
    <div class="lg:w-1/2 flex items-center justify-center">    
        <button class="py-3 bg-black font-bold text-white rounded-full w-full my-5 mx-auto flex items-center justify-evenly px-20 lg:w-1/2 lg:py-2" onclick="nextStep()"><p>Suivant</p><img src="../../assets/img/arrow-button.png" alt=""></button>
    </div>
</div>
