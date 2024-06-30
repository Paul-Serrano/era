<div class="progress-bar-container w-full h-2 bg-primary bg-opacity-25 rounded-full my-4">
    <div id="progress-bar" class="h-2 bg-primary rounded-full w-[77%]"></div>
</div>
<div id="step10" class="step flex flex-col justify-evenly w-full">
    <button class="relative left-0 my-5" onclick="prevStep()"><img src="../../assets/img/back-feature.png" alt=""></button>
    <h2 class="font-bold text-2xl">Récapitulons vos réponses jusqu'à maintenant</h2>
    <div id="recap" class="flex flex-col space-y-4 p-4 border rounded-lg">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-bold">Vos préférences</h3>
            <button onclick="goToStep(2)" class="bg-black p-2 rounded-xl text-white">Modifier</button>
        </div>
        <div class="flex flex-col justify-evenly bg-secondary p-5 rounded-2xl">
            <div class="flex flex-col my-4">
                <p class="font-bold">Votre destination</p>
                <span id="destination" class="bg-white rounded-full p-2 text-center align-middle w-1/3"></span>
            </div>
            <div class="flex flex-col my-4">
                <p class="font-bold">Votre budget</p>
                <div class="flex items-center">
                    <p class="align-middle flex flex-col items-center"><span>Tot: </span><span class="bg-white rounded-full p-2 text-center" id="recapBudgetTotal"></span></p>
                    <p class="align-middle flex flex-col items-center mx-2"><span>Pers: </span><span class="bg-white rounded-full p-2 text-center" id="recapBudgetPersonal"></span></p>
                    <p class="align-middle flex flex-col items-center"><span>Lois: </span><span class="bg-white rounded-full p-2 text-center" id="recapBudgetLeisure"></span></p>
                </div>
            </div>
            <div class="flex flex-col my-4">
                <p class="font-bold">Dates de voyage</p>
                <div class="flex items-center justify-between">
                    <span id="recapStartDate" class="bg-white rounded-full p-2 text-center align-middle"></span>
                    <span id="recapEndDate" class="bg-white rounded-full p-2 text-center align-middle"></span>
                </div>
            </div>
        </div>
        <!-- Récapitulatif des choix sera affiché ici -->
    </div>
    <button class="my-5 rounded-full bg-black p-3 w-full text-white font-bold" onclick="submitForm()">Soumettre</button>
</div>
