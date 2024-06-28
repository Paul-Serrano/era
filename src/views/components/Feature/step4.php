<div class="step flex flex-col justify-evenly w-full">
    <button class="my-5" onclick="prevStep()"><img src="../../assets/img/back-feature.png" alt=""></button>
    <h3 class="text-xl font-bold my-5">Comment vous identifiez-vous ?</h3>
    <label class="rounded-md border border-black py-2 px-6 my-5 flex justify-between items-center">
        <img src="../../assets/img/radio-button.png" alt="">
        <input class="hidden" type="radio" name="gender" value="homme">
        <p>Homme</p>
        <img src="" alt="">
    </label>
    <label class="rounded-md border border-black py-2 px-6 my-5 flex justify-between items-center">
    <img src="../../assets/img/radio-button.png" alt="">
        <input class="hidden" type="radio" name="gender" value="femme">
        <p>Femme</p>
        <img src="" alt="">
    </label>
    <label class="rounded-md border border-black py-2 px-6 my-5 flex justify-between items-center">
        <img src="../../assets/img/radio-button.png" alt="">
        <input class="hidden" type="radio" name="gender" value="non-binaire">
        <p>Non Binaire</p>
        <img src="" alt="">
    </label>
    <button class="my-5 rounded-full bg-secondary p-3 w-full text-white font-bold" onclick="nextStep()">Suivant</button>
</div>
