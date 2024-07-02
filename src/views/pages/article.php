<div class="my-10 ml-[10%]">
    <a class="font-bold underline" href="/blog">Revenir aux articles</a>
</div>
<div class="w-3/4 flex flex-col mx-auto my-5 lg:flex-row lg:justify-between">
    <div class="flex flex-col lg:w-[60%]">
        <img class="mb-10 lg:w-1/2 lg:order-3 lg:ml-10" src="../../assets/img/article.png" alt="">
        <h1 class="text-xl font-bold lg:text-4xl lg:order-1"><?= htmlspecialchars($article->getTitle()) ?></h1>
        <p class="lg:order-2">Auteur: <?= htmlspecialchars($article->getAutor()) ?></p>
    </div>
    <div class="my-5 grid grid-cols-2 gap-2 lg:w-[30%] lg:flex lg:flex-col lg:items-center">
        <?php foreach ($article->getTags() as $tag): ?>
            <span class="bg-featureInput text-white rounded-xl p-2 text-center lg:my-5 lg:w-3/4"><?= htmlspecialchars($tag) ;?></span>
        <?php endforeach; ?>
    </div>
</div>
<div>
    <div class="w-[95%] m-auto">
        <?= $article->getContent() ?>
    </div>

    <div class="my-10 ml-[10%]">
        <a class="font-bold underline" href="/blog">Revenir aux articles</a>
    </div>
</div>
