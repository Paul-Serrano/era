<div class="my-5 w-[85%] mx-auto">
    <form method="GET" action="/blog" class="lg:flex lg:justify-between lg:w-full lg:items-center">
        <h2 class="hidden lg:flex lg:text-3xl lg:font-bold">Apprenez en tous les jours</h2>
        <div class="flex flex-col items-center lg:w-1/3">
            <select name="author" class="border p-2 w-full my-5">
                <option value="">Tous les auteurs</option>
                <?php foreach ($data['authors'] as $author): ?>
                <option value="<?= htmlspecialchars($author['mail']) ?>" <?= (isset($_GET['author']) && $_GET['author'] == $author['mail']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($author['firstname'] . ' ' . $author['lastname']) ?>
                </option>
                <?php endforeach; ?>
            </select>

            <select name="tag" class="border p-2 w-full">
                <option value="" class="relative w-full">Tous les tags</option>
                <?php foreach ($data['tags'] as $tag): ?>
                <option  class="relative w-full" value="<?= htmlspecialchars($tag->getName()) ?>" <?= (isset($_GET['tag']) && $_GET['tag'] == $tag->getName()) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($tag->getName()) ?>
                </option>
                <?php endforeach; ?>
            </select>

            <button type="submit" class="bg-black text-white p-2 my-5 w-full rounded-full">Filtrer</button>
        </div>
    </form>

    <div class="my-4">
        <?php if (isset($_GET['author']) && $_GET['author'] != ''): ?>
            <p>Filtre par auteur: <strong><?= htmlspecialchars($author['firstname'] . ' ' . $author['lastname']) ?></strong></p>
        <?php endif; ?>
        <?php if (isset($_GET['tag']) && $_GET['tag'] != ''): ?>
            <p>Filtre par tag: <strong><?= htmlspecialchars($_GET['tag']) ?></strong></p>
        <?php endif; ?>
    </div>

    <ul class="flex flex-col items-center justify-evenly lg:grid lg:grid-cols-3 lg:gap-10">
        <?php foreach ($data['articles'] as $article): ?>
        <li class="border-featureInput border-2 p-4 w-full my-5 flex rounded-2xl justify-between flex-col lg:h-full">
            <a class="lg:flex lg:flex-col lg:justify-between" href="/article/<?= $article->getSlug();?>"> 
                <img src="../../assets/img/blog.png" alt="">
                <div class="flex flex-col justify-evenly w-full">
                    <div class="my-5">
                        <h2 class="font-bold text-xl"><?= htmlspecialchars($article->getTitle()); ?></h2>
                        <p><?= htmlspecialchars($article->getAutor()); ?></p>
                    </div>
                    <!-- <div class="article-content my-5">
                        <?= substr($article->getContent(), 0, 100) ;?>
                    </div> -->
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <?php foreach ($article->getTags() as $tag): ?>
                        <span class="bg-featureInput text-white py-1 w-full text-center font-bold rounded-full p-2 h-full align-middle"><?= htmlspecialchars($tag) ;?></span>
                    <?php endforeach; ?>
                </div> 
            </a>  
        </li>
        <?php endforeach; ?>
    </ul>
</div>
