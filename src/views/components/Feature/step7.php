<div class="step flex flex-col justify-evenly w-full">
    <button class="my-5" onclick="prevStep()"><img src="../../assets/img/back-feature.png" alt=""></button>
    <h3 class="text-xl font-bold my-5">Avez-vous des problèmes de santé ?</h3>
    
    <label class="rounded-md border border-black py-2 px-6 my-5 flex justify-between items-center">
        <img src="../../assets/img/radio-button.png" alt="">
        <input class="hidden" type="checkbox" name="health" value="aucun">
        <p>Aucun problème de santé</p>
        <img src="" alt="">
    </label>
    <label class="rounded-md border border-black py-2 px-6 my-5 flex justify-between items-center">
        <img src="../../assets/img/radio-button.png" alt="">
        <input class="hidden" type="checkbox" name="health" value="handicap physique">
        <p>Handicap physique</p>
        <img src="" alt="">
    </label>
    <label class="rounded-md border border-black py-2 px-6 my-5 flex justify-between items-center">
        <img src="../../assets/img/radio-button.png" alt="">
        <input class="hidden" type="checkbox" name="health" value="handicap mental">
        <p>Handicap mental</p>
        <img src="" alt="">
    </label>
    <label class="rounded-md border border-black py-2 px-6 my-5 flex justify-between items-center">
        <img src="../../assets/img/radio-button.png" alt="">
        <input class="hidden" type="checkbox" name="health" value="maladie chronique">
        <p>Maladie chronique</p>
        <img src="" alt="">
    </label>

    <button class="my-5 rounded-full bg-secondary p-3 w-full text-white font-bold" onclick="nextStep()">Suivant</button>
</div>
