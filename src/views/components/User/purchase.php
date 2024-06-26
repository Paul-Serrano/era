<div class="flex flex-col justify-evenly">
    <div class="flex flex-col">
        <h2 class="text-xl font-bold">Bonjour <?= $user->getFirstname() ?> !</h2>
        <p>Welcome back and let's create your next grand adventure!</p>
    </div>
    <div class="w-full">
    <?php if ($features): ?>
        <ul class="p-0 w-full list-disc grid grid-cols-2 gap-4 my-5">
            <?php foreach ($features as $key => $feature): ?>
                <?php if(($key + 1) % 3 == 1): ?>
                <li class="flex border-featureInput border-2 p-2 w-full col-span-2 rounded-lg bg-white">
                    <a class="flex w-full" href="/feature?id=<?= $feature->getId();?>">
                        <img class="w-1/2" src="../../assets/img/feature.png" alt="">
                        <div class="flex flex-col w-1/2 items-end">
                            <h2 class="font-bold"><?php echo $feature->getName(); ?></h2>
                            <p class="bg-featureInput p-2 rounded-xl text-white font-bold w-1/3 text-center my-2"><?php echo $feature->getPrice(); ?>€</p>
                        </div>
                    </a>
                </li>
                <?php else: ?>
                <li class="flex border-featureInput border-2 p-2 w-full row-span-2 col-span-1 rounded-lg bg-white">
                    <a class="flex flex-col-reverse w-full" href="/feature?id=<?= $feature->getId();?>">
                        <img class="mb-5" src="../../assets/img/feature.png" alt="">
                        <div class="flex flex-col">
                            <h2 class="font-bold"><?php echo $feature->getName(); ?></h2>
                            <p class="bg-featureInput p-2 rounded-xl text-white font-bold text-center w-1/2 my-2"><?php echo $feature->getPrice(); ?>€</p>
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
</div>