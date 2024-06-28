<ul>
    <?php foreach($userFeatures as $feature): ?>
        <li>
            <h2><?php echo $feature->getName(); ?></h2>
            <p>Price: <?php echo $feature->getPrice(); ?></p>
        </li>
        <a class="bg-secondary text-white py-1 w-2/3 text-center my-1" href="/userFeature?id=<?= $feature->getId();?>">Utiliser</a>
    <?php endforeach; ?>
</ul>