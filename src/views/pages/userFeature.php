<?php

?>
<div id="steps" class="w-[80%] m-auto items-center">
        <!-- Step 1 -->
    <div id="step1" class="flex flex-col items-center">
        <?php include_once __DIR__ . '/../components/Feature/step1.php' ?>
    </div>
    <!-- Step 2 -->
    <div id="step2" class="hidden flex-col items-center">
        <?php include_once __DIR__ . '/../components/Feature/step2.php' ?>
    </div>
    <!-- Step 3 -->
    <div id="step3" class="hidden flex-col items-center">
        <?php include_once __DIR__ . '/../components/Feature/step3.php' ?>
    </div>
    <!-- Step 4 -->
    <div id="step4" class="hidden flex-col items-center">
        <?php include_once __DIR__ . '/../components/Feature/step4.php' ?>  
    </div>
    <!-- Step 5 -->
    <div id="step5" class="hidden flex-col items-center">
        <?php include_once __DIR__ . '/../components/Feature/step5.php' ?>
    </div>
    <!-- Step 6 -->
    <div id="step6" class="hidden flex-col items-center">
        <?php include_once __DIR__ . '/../components/Feature/step6.php' ?>
    </div>
    <!-- Step 7 -->
    <div id="step7" class="hidden flex-col items-center">
        <?php include_once __DIR__ . '/../components/Feature/step7.php' ?>
    </div>
    <!-- Step 8 -->
    <div id="step8" class="hidden flex-col items-center">
        <?php include_once __DIR__ . '/../components/Feature/step8.php' ?>
    </div>
    <!-- Step 9 -->
    <div id="step9" class="hidden flex-col items-center">
        <?php include_once __DIR__ . '/../components/Feature/step9.php' ?>
    </div>
    <!-- Step 10 -->
    <div id="step10" class="hidden flex-col items-center">
        <?php include_once __DIR__ . '/../components/Feature/step10.php' ?>
    </div>
    <!-- Step 11 (loader) -->
    <div id="step11" class="hidden flex-col items-center">
        <?php include_once __DIR__ . '/../components/Feature/step11.php' ?>
    </div>
    <!-- Step 12 (recommendations) -->
    <div id="step12" class="step flex flex-col lg:w-2/3 lg:m-auto" style="display:none;">
        <h2 class="text-2xl font-bold">Votre nouveau train de vie est ici !</h2>
        <img src="../../assets/img/step12.png" alt="" class="lg:w-1/3 lg:m-auto">
        <div id="recommendations" class="w-full m-auto">
            <div class="flex flex-col">
                <h3 class="text-lg font-bold">Votre taux de confort</h3>
                <div class="flex flex-col">
                    <div class="flex flex-col bg-secondary p-5 my-5 rounded-xl">
                        <h4 class="font-bold">Qualité de vie : 64%</h4>
                        <div class="flex justify-between items-center my-5">
                            <img src="../../assets/img/bad.png" alt="">
                            <img src="../../assets/img/good.png" alt="">
                        </div>
                        <div class="progress-bar-container w-full h-2 bg-white rounded-full my-4">
                            <div class="h-2 bg-primary rounded-full w-[64%]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-secondary p-5 my-5 rounded-xl">
                        <h4 class="font-bold">Loisir : 35%</h4>
                        <div class="flex justify-between items-center my-5">
                            <img src="../../assets/img/bad.png" alt="">
                            <img src="../../assets/img/good.png" alt="">
                        </div>
                        <div class="progress-bar-container w-full h-2 bg-white rounded-full my-4">
                            <div class="h-2 bg-primary rounded-full w-[35%]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-secondary p-5 my-5 rounded-xl">
                        <h4 class="font-bold">Restauration : 59%</h4>
                        <div class="flex justify-between items-center my-5">
                            <img src="../../assets/img/bad.png" alt="">
                            <img src="../../assets/img/good.png" alt="">
                        </div>
                        <div class="progress-bar-container w-full h-2 bg-white rounded-full my-4">
                            <div class="h-2 bg-primary rounded-full w-[59%]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-secondary p-5 my-5 rounded-xl">
                        <h4 class="font-bold">Professionnel : 86%</h4>
                        <div class="flex justify-between items-center my-5">
                            <img src="../../assets/img/bad.png" alt="">
                            <img src="../../assets/img/good.png" alt="">
                        </div>
                        <div class="progress-bar-container w-full h-2 bg-white rounded-full my-4">
                            <div class="h-2 bg-primary rounded-full w-[86%]"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <h3 class="text-lg font-bold my-5">Votre tain de vie</h3>
                <p>Avec un budget de <span></span> pour une durée de [mettre le temps du voyage] à <span></span>Vous pouvez vous attendre à un style de vie agréable et confortable
                <span></span> est réputé pour sa culture et son histoire. Voici une estimation de votre train de vie dans ce cadre idyllique.</p>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-col bg-secondary p-5 my-5 rounded-xl">
                    <h4 class="font-bold text-lg">Logement</h4>
                    <div class="flex items-center my-5">
                        <span class="bg-white rounded-full p-2 text-center">Jardin</span>
                        <span class="bg-white rounded-full p-2 text-center mx-5">Maison</span>
                        <span class="bg-white rounded-full p-2 text-center">3 pièces</span>
                    </div>
                    <div class="flex flex-col">
                        <p>Coût estimé : [Pris environs] par [durée du voyage]</p>
                        <p class="my-5">[Type de logement #1] : Description du type de logement (ce qu’il contient, etc). Proposition de quartier ou habité parce qu’il offre par exemple un bon équilibre (bien vue, moins de crime, etc)</p>
                    </div>
                    <button class="bg-white rounded-full p-2 w-1/3">Voir plus</button>
                </div>

                <div class="flex flex-col bg-secondary p-5 my-5 rounded-xl">
                    <h4 class="font-bold text-lg">Alimentation</h4>
                    <div class="flex items-center my-5">
                        <span class="bg-white rounded-full p-2 text-center">Jardin</span>
                        <span class="bg-white rounded-full p-2 text-center mx-5">Maison</span>
                        <span class="bg-white rounded-full p-2 text-center">3 pièces</span>
                    </div>
                    <div class="flex flex-col">
                        <p>Coût estimé : [Prix] par [durée du voyage]</p>
                        <p class="my-5">[Type de logement #1] : Description du type de logement (ce qu’il contient, etc). Proposition de quartier ou habité parce qu’il offre par exemple un bon équilibre (bien vue, moins de crime, etc)</p>
                    </div>
                    <button class="bg-white rounded-full p-2 w-1/3">Voir plus</button>
                </div>

                <div class="flex flex-col bg-secondary p-5 my-5 rounded-xl">
                    <h4 class="font-bold text-lg">Transport</h4>
                    <div class="flex items-center my-5">
                        <span class="bg-white rounded-full p-2 text-center">Jardin</span>
                        <span class="bg-white rounded-full p-2 text-center mx-5">Maison</span>
                        <span class="bg-white rounded-full p-2 text-center">3 pièces</span>
                    </div>
                    <div class="flex flex-col">
                        <p>Coût estimé : [Pris environs] par [durée du voyage]</p>
                        <p class="my-5">[Type de logement #1] : Description du type de logement (ce qu’il contient, etc). Proposition de quartier ou habité parce qu’il offre par exemple un bon équilibre (bien vue, moins de crime, etc)</p>
                    </div>
                    <button class="bg-white rounded-full p-2 w-1/3">Voir plus</button>
                </div>

                <div class="flex flex-col bg-secondary p-5 my-5 rounded-xl">
                    <h4 class="font-bold text-lg">Divertissement & Loisirs</h4>
                    <div class="flex items-center my-5">
                        <span class="bg-white rounded-full p-2 text-center">Jardin</span>
                        <span class="bg-white rounded-full p-2 text-center mx-5">Maison</span>
                        <span class="bg-white rounded-full p-2 text-center">3 pièces</span>
                    </div>
                    <div class="flex flex-col">
                        <p>Coût estimé : [Pris environs] par [durée du voyage]</p>
                        <p class="my-5">[Type de logement #1] : Description du type de logement (ce qu’il contient, etc). Proposition de quartier ou habité parce qu’il offre par exemple un bon équilibre (bien vue, moins de crime, etc)</p>
                    </div>
                    <button class="bg-white rounded-full p-2 w-1/3">Voir plus</button>
                </div>

                <div class="flex flex-col bg-secondary p-5 my-5 rounded-xl">
                    <h4 class="font-bold text-lg">Santé & Bien être</h4>
                    <div class="flex items-center my-5">
                        <span class="bg-white rounded-full p-2 text-center">Jardin</span>
                        <span class="bg-white rounded-full p-2 text-center mx-5">Maison</span>
                        <span class="bg-white rounded-full p-2 text-center">3 pièces</span>
                    </div>
                    <div class="flex flex-col">
                        <p>Coût estimé : [Pris environs] par [durée du voyage]</p>
                        <p class="my-5">[Type de logement #1] : Description du type de logement (ce qu’il contient, etc). Proposition de quartier ou habité parce qu’il offre par exemple un bon équilibre (bien vue, moins de crime, etc)</p>
                    </div>
                    <button class="bg-white rounded-full p-2 w-1/3">Voir plus</button>
                </div>

                <div class="flex flex-col bg-secondary p-5 my-5 rounded-xl">
                    <h4 class="font-bold text-lg">Autres Dépenses</h4>
                    <div class="flex items-center my-5">
                        <span class="bg-white rounded-full p-2 text-center">Jardin</span>
                        <span class="bg-white rounded-full p-2 text-center mx-5">Maison</span>
                        <span class="bg-white rounded-full p-2 text-center">3 pièces</span>
                    </div>
                    <div class="flex flex-col">
                        <p>Coût estimé : [Pris environs] par [durée du voyage]</p>
                        <p class="my-5">[Type de logement #1] : Description du type de logement (ce qu’il contient, etc). Proposition de quartier ou habité parce qu’il offre par exemple un bon équilibre (bien vue, moins de crime, etc)</p>
                    </div>
                    <button class="bg-white rounded-full p-2 w-1/3">Voir plus</button>
                </div>
            </div>
        </div>
    </div>
    <?php if($user): ?>
    <div class="h-[100px]"></div>
    <div class="flex justify-evenly items-center fixed bottom-0 left-0 py-5 w-full bg-[#fefefe] border-t-2 border-featureInput">
        <a href="/panelUser" id="homeButton" class="flex flex-col justify-evenly items-center w-1/4"><img src="../../assets/img/featureHome.png" alt=""><p>Home</p></a>
    </div>
    <?php endif; ?>
</div>
<script src="/src/views/scripts/feature.js"></script>

