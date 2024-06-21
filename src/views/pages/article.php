<div class="w-3/4 flex flex-col mx-auto my-5">
    <h1><?= htmlspecialchars($article->getTitle()) ?></h1>
    <p>Author: <?= htmlspecialchars($article->getAutor()) ?></p>
    <div class="my-5">
        <?php foreach ($article->getTags() as $tag): ?>
            <span class="bg-black text-white rounded-xl p-2"><?= htmlspecialchars($tag) ;?></span>
        <?php endforeach; ?>
    </div>
    <div>
        <?= $article->getContent() ?>
    </div>

    <div>
        <a href="/blog">Revenir aux articles</a>
    </div>
</div>
