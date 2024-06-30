<div class="w-3/4 flex flex-col mx-auto my-5">
    <div class="my-10">
        <a class="font-bold underline" href="/blog">Revenir aux articles</a>
    </div>
    <img class="mb-10" src="../../assets/img/article.png" alt="">
    <h1 class="text-xl font-bold"><?= htmlspecialchars($article->getTitle()) ?></h1>
    <p>Author: <?= htmlspecialchars($article->getAutor()) ?></p>
    <div class="my-5 grid grid-cols-2 gap-2">
        <?php foreach ($article->getTags() as $tag): ?>
            <span class="bg-featureInput text-white rounded-xl p-2 text-center"><?= htmlspecialchars($tag) ;?></span>
        <?php endforeach; ?>
    </div>
    <div>
        <?= $article->getContent() ?>
    </div>

    <div class="my-10">
        <a class="font-bold underline" href="/blog">Revenir aux articles</a>
    </div>
</div>
