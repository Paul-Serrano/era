<div class="step flex flex-col justify-evenly w-full">
    <button class="relative left-0" onclick="prevStep()"><img src="../../assets/img/back-feature.png" alt=""></button>
    <h2 class="text-2xl font-bold text-secondary my-5">Bonjour !</h2>
    <label class="text-xl font-bold mt-5" for="country">Où voulez-vous aller ?</label>
    <input class="rounded-md border border-black ml-5 p-2 my-5" type="text" id="country" name="country">
    
    <h3 class="text-xl font-bold my-5">Avec un budget de ...</h3>
    <label class="text-secondary ml-5" for="budgetTotal">Budget total</label>
    <input class="rounded-md border border-black ml-5 p-2 my-5" type="number" id="budgetTotal" name="budgetTotal">

    <label class="text-secondary ml-5" for="budgetPersonal">Budget personnel</label>
    <input class="rounded-md border border-black ml-5 p-2 my-5" type="number" id="budgetPersonal" name="budgetPersonal">

    <label class="text-secondary ml-5" for="budgetLeisure">Budget loisir</label>
    <input class="rounded-md border border-black ml-5 p-2 my-5" type="number" id="budgetLeisure" name="budgetLeisure">

    <h3 class="text-xl font-bold my-5">Pour une durée de ...</h3>
    <label class="text-secondary ml-5" for="startDate">Date de début</label>
    <input class="rounded-md border border-black ml-5 p-2 my-5" type="date" id="startDate" name="startDate">

    <label  class="text-secondary ml-5"for="endDate">Date de fin</label>
    <input class="rounded-md border border-black ml-5 p-2 my-5" type="date" id="endDate" name="endDate">
    
    <button class="py-3 bg-secondary font-bold text-white rounded-full w-full my-5 mx-auto" onclick="nextStep()">Suivant</button>
</div>
