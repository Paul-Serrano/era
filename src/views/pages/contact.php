<div class="flex flex-col my-5">
    <section class="flex flex-col px-5">
        <div class="flex flex-col">
            <div class="flex flex-col my-10">
                <h1 class="font-bold text-xl">Contactez nous !</h1>
                <p class="my-10">Tu peux nous contacter soit par mail à : era.wecontact@gmail.com</p>
                <p>Soit en remplissant le formulaire de contact ci-dessous :</p>
            </div>
            <img src="../../assets/img/contact.png" alt="">
        </div>
        <div class="flex items-center justify-evenly my-5">
            <a class="p-2 rounded-full text-center border-2 border-featureInput" href="mailto:era.wecontact@gmail.com">era.wecontact@gmail.com</a>
            <p class="p-2 rounded-full text-center border-2 border-featureInput">0625325698</p>
        </div>
    </section>
    <section class="bg-secondary px-5 py-16 bg-opacity-50">
        <form action="/contact" method="POST" class="flex flex-col">
            <div class="flex flex-col items-center justify-between">
                <div class="flex flex-col w-full">
                    <label class="font-bold" for="contactName">Nom</label>
                    <input class="rounded-full border border-featureInput p-2 mb-5" type="text" id="contactName" name="contactName">
                </div>
                <div class="flex flex-col w-full">
                    <label class="font-bold" for="contactSurname">Prénom</label>
                    <input class="rounded-full border border-featureInput p-2 mb-5" type="text" id="contactSurname" name="contactSurname">
                </div>
            </div>
            <div class="flex flex-col">
                <label class="font-bold" for="contactMail">Mail</label>
                <input class="rounded-full border border-featureInput p-2 mb-5" type="text" id="contactMail" name="contactMail">
            </div>
            <div class="flex flex-col">
                <label class="font-bold" for="contactTopic">Objet du message</label>
                <input class="rounded-full border border-featureInput p-2 mb-5" type="text" id="contactTopic" name="contactTopic">
            </div>
            <div class="flex flex-col">
                <label class="font-bold" for="contactMessage">Message</label>
                <textarea class="rounded-2xl border border-featureInput p-2 mb-5 resize-y h-32" id="contactMessage" name="contactMessage"></textarea>
            </div>
            <button class="bg-black text-white font-bold p-2 rounded-full" type="submit">Envoyer</button>
        </form>
    </section>
    <section class="p-5 my-10 flex flex-col">
        <img src="../../assets/img/contactNews.png" alt="">
        <div>
            <h3 class="text-xl w-full leading-8 font-bold relative lg:font-extrabold">Abonnez -vous à notre Newsletter !</h3>
            <p class="text-md font-thin my-2 relative">Inscris-toi à notre newsletter pour suivre notre actualité et obtiens -15% sur ta prochaine réservation !</p>
            <form action="/subscribeNewsletter" method="POST">
            <div class="formRow flex items-center justify-between w-full my-2">
                <div class="formGroup w-[47.5%] mr-[2.5%]">
                    <label for="newsletterName" class="hidden"></label>
                    <input name="newsletterName" type="text" class="border-black border-2 rounded-full w-full p-2 lg:px-4" placeholder="Nom">
                </div>
                <div class="formGroup w-[47.5%] ml-[2.5%]">
                    <label for="newsletterSurname" class="hidden"></label>
                    <input name="newsletterSurname" type="text" class="border-black border-2 rounded-full w-full p-2 lg:px-4" placeholder="Prénom">
                </div>
            </div>
            <div class="formRow flex items-center w-full my-2">
                <div class="formGroup w-full">
                    <label for="newsletterMail" class="hidden"></label>
                    <input name="newsletterMail" type="text" class="border-black border-2 rounded-full w-full p-2 lg:px-4" placeholder="E-mail">
                </div>
            </div>
            <button class="w-2/3 flex justify-evenly items-center bg-black rounded-full px-4 py-3 lg:w-[47.5%] lg:justify-center lg:space-x-4" type="submit" name="newsletterSubmit">
                <p class="text-white font-light">Envoyer</p>
                <img src="../../assets/img/arrow-button.png" alt="envoyer">
            </button>
        </form>
        <p class="text-md font-thin my-2 relative">En renseignant votre adresse e-mail, vous acceptez de recevoir la newsletter et vous reconnaissez avoir pris connaissance de notre politique de confidentialité.</p>
        </div>
    </section>
</div>