<div class="flex flex-col justify-evenly lg:mb-40">
    <h2 class="font-bold text-xl lg:text-3xl">Mes Outils</h2>
    <p>Profitez de vos fonctionnalités</p>
    <?php if ($userFeatures): ?>
        <ul class="p-0 w-full list-disc grid grid-cols-2 gap-4 my-5 lg:w-2/3 lg:m-auto lg:my-10">
            <?php foreach ($userFeatures as $key => $feature): ?>
                <?php if(($key + 1) % 3 == 1): ?>
                <li class="flex border-featureInput border-2 p-2 w-full col-span-2 rounded-lg bg-white">
                    <a class="flex w-full lg:justify-evenly lg:items-center" href="/userFeature?id=<?= $feature->getId();?>">
                        <img class="w-1/2 lg:w-1/4" src="../../assets/img/feature.svg" alt="">
                        <div class="flex flex-col w-1/2 items-end lg:items-center">
                            <h2 class="font-bold"><?php echo $feature->getName(); ?></h2>
                            <?php if($key == 0): ?>
                                <p class="bg-primary p-2 rounded-xl text-white font-bold text-center lg:w-1/3">Fonctionnelle</p>
                            <?php endif; ?>
                        </div>
                    </a>
                </li>
                <?php else: ?>
                <li class="flex border-featureInput border-2 p-2 w-full row-span-2 col-span-1 rounded-lg bg-white lg:p-5">
                    <a class="flex flex-col-reverse w-full" href="/userFeature?id=<?= $feature->getId();?>">
                        <img class="mb-5 lg:w-1/2" src="../../assets/img/feature.svg" alt="">
                        <div class="flex flex-col">
                            <h2 class="font-bold"><?php echo $feature->getName(); ?></h2>
                            <p class="py-5 rounded-xl text-white font-bold text-center w-1/2 my-2 lg:w-1/3"></p>
                        </div>
                    </a>
                </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucune fonctionnalité trouvée.</p>
    <?php endif; ?>
</div>
