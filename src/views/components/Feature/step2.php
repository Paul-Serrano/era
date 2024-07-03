<div class="progress-bar-container w-full h-2 bg-primary bg-opacity-25 rounded-full my-4">
    <div id="progress-bar" class="h-2 bg-primary rounded-full w-[8%]"></div>
</div>
<div class="step flex flex-col justify-evenly w-full">
    <button class="relative left-0" onclick="prevStep()"><img src="../../assets/img/back-feature.png" alt=""></button>
    <h2 class="text-2xl font-bold my-5">Bonjour <span class="capitalize"><?= $user ? $user->getFirstname() : 'Test' ?> !</span></h2>
    <label class="text-xl font-bold mt-5" for="country">Où voulez-vous aller ?</label>
    <input class="rounded-md border border-featureInput p-2 my-5 lg:w-1/2" type="text" id="country" name="country">
    
    <h3 class="text-xl font-bold my-5">Avec un budget de ...</h3>
    <label class="text-featureInput" for="budgetTotal">Budget total</label>
    <input class="rounded-md border border-featureInput p-2 mb-5 lg:w-1/2" type="number" id="budgetTotal" name="budgetTotal">

    <label class="text-featureInput" for="budgetPersonal">Budget personnel</label>
    <input class="rounded-md border border-featureInput p-2 mb-5 lg:w-1/2" type="number" id="budgetPersonal" name="budgetPersonal">

    <label class="text-featureInput" for="budgetLeisure">Budget loisir</label>
    <input class="rounded-md border border-featureInput p-2 mb-5 lg:w-1/2" type="number" id="budgetLeisure" name="budgetLeisure">

    <h3 class="text-xl font-bold my-5">Pour une durée de ...</h3>
    <label class="text-featureInput" for="startDate">Date de début</label>
    <input class="rounded-md border border-featureInput p-2 mb-5 lg:w-1/2" type="date" id="startDate" name="startDate">

    <label  class="text-featureInput"for="endDate">Date de fin</label>
    <input class="rounded-md border border-featureInput p-2 mb-5 lg:w-1/2" type="date" id="endDate" name="endDate">
    
    <button class="py-3 bg-black font-bold text-white rounded-full w-full my-5 mx-auto flex items-center justify-evenly px-20 lg:w-1/4 lg:mr-0 lg:py-2" onclick="nextStep()"><p>Suivant</p><img src="../../assets/img/arrow-button.png" alt=""></button>
</div>
