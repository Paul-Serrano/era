<div class="flex flex-col items-center justify-evenly px-4 mt-20 text-black lg:w-3/4 lg:m-auto lg:mt-16">
    <h3 class="text-3xl w-full leading-8 font-bold relative z-2">Demande personnalisée</h3>
    <p class="text-xl font-thin my-10 relative z-2">Création d’un devis sur mesure en fonction de vos besoin !</p>
    <form action="" method="POST" class="flex flex-col justify-evenly items-center w-full relative z-2">
        <div class="formRow flex items-center justify-between w-full my-2">
            <div class="formGroup w-[47.5%] mr-[2.5%]">
                <label for="quotLastname" class="hidden"></label>
                <input name="quotLastname" type="text" class="border-black border-2 rounded-xl w-full p-2" placeholder="Nom">
            </div>
            <div class="formGroup w-[47.5%] ml-[2.5%]">
                <label for="quotSurname" class="hidden"></label>
                <input name="quotSurname" type="text" class="border-black border-2 rounded-xl w-full p-2" placeholder="Prénom">
            </div>
        </div>
        <div class="formRow flex items-center w-full my-2">
            <div class="formGroup w-full">
                <label for="quotMail" class="hidden"></label>
                <input name="quotMail" type="text" class="border-black border-2 rounded-xl w-full p-2" placeholder="E-mail">
            </div>
        </div>
        <div class="formRow flex items-center w-full my-2">
            <div class="formGroup w-full">
                <label for="quotTel" class="hidden"></label>
                <input name="quotTel" type="text" class="border-black border-2 rounded-xl w-full p-2" placeholder="N° Téléphone">
            </div>
        </div>
        <div class="formRow flex items-center w-full my-2">
            <div class="formGroup w-full">
                <label for="quotDesc" class="hidden"></label>
                <input name="quotDesc" type="textarea" class="border-black border-2 rounded-xl w-full p-2" placeholder="Description">
            </div>
        </div>
        <button class="w-2/3 flex justify-evenly items-center bg-black rounded-full px-4 py-3 lg:w-1/3 lg:py-2" type="submit" name="quotSubmit">
            <p class="text-white font-light">Envoyer</p>
            <img src="../../assets/img/arrow-button.png" alt="envoyer">
        </button>
    </form>
    <img class="overflow-hidden origin-top-left w-full h-full absolute right-0 bottom-0 z-[1] lg:hidden" src="../../assets/img/quotation-net.png" alt="">
</div>