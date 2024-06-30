<div class="lg:p-5">
    <h3 class="text-xl w-full leading-8 font-bold relative lg:font-extrabold">NEWSLETTER </h3>
    <p class="text-lg my-2 relative">Obtient -15% ! </p>
    <p class="text-md font-thin my-2 relative">Inscris-toi à notre newsletter pour suivre notre actualité et obtiens -15% sur ta prochaine réservation ! </p>
    <form action="/subscribeNewsletter" method="POST">
        <div class="formRow flex items-center justify-between w-full my-2">
            <div class="formGroup w-[47.5%] mr-[2.5%]">
                <label for="newsletterName" class="hidden"></label>
                <input name="newsletterName" type="text" class="border-black border-2 rounded-full w-full py-2 px-4 text-sm" placeholder="Nom">
            </div>
            <div class="formGroup w-[47.5%] ml-[2.5%]">
                <label for="newsletterSurname" class="hidden"></label>
                <input name="newsletterSurname" type="text" class="border-black border-2 rounded-full w-full py-2 px-4 text-sm" placeholder="Prénom">
            </div>
        </div>
        <div class="formRow flex items-center w-full my-2">
            <div class="formGroup w-full">
                <label for="newsletterMail" class="hidden"></label>
                <input name="newsletterMail" type="text" class="border-black border-2 rounded-full w-full py-2 px-4 text-sm" placeholder="E-mail">
            </div>
        </div>
        <button class="w-2/3 flex justify-evenly items-center bg-black rounded-full px-4 py-3 lg:w-[47.5%] lg:justify-center lg:space-x-4" type="submit" name="newsletterSubmit">
            <p class="text-white font-light">Envoyer</p>
            <img src="../../assets/img/arrow-button.png" alt="envoyer">
        </button>
    </form>
    <button class="absolute top-5 right-5 close-newsletter"><img src="../../assets/img/close-newsletter.png" alt="fermer newsletter"></button>
</div>
<script src="/src/views/components/Landing/newsletter-popup/newsletter-popup.js"></script>