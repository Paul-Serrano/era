<div class="my-5 w-[85%] mx-auto">
    <form method="GET" action="/blog">
        <div class="flex flex-col items-center">
            <select name="author" class="border p-2 w-full">
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

            <button type="submit" class="bg-secondary text-white p-2 my-2 w-full">Filtrer</button>
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

    <ul class="flex flex-col items-center justify-evenly">
        <?php foreach ($data['articles'] as $article): ?>
        <li class="border-secondary border-4 p-4 w-full my-5 flex rounded-2xl justify-between">
            <div class="flex flex-col justify-evenly w-1/2">
                <div>
                    <h2 class="font-bold text-xl"><?= htmlspecialchars($article->getTitle()); ?></h2>
                    <p><?= htmlspecialchars($article->getAutor()); ?></p>
                </div>
                <!-- <div class="article-content my-5">
                    <?= substr($article->getContent(), 0, 100) ;?>
                </div> -->
                <a class="bg-secondary text-white py-1 w-2/3 text-center my-1" href="/article?id=<?= $article->getId();?>">Voir plus</a> 
            </div>
            <div class="flex flex-col justify-evenly items-center my-2 w-1/3">
                <?php foreach ($article->getTags() as $tag): ?>
                    <span class="bg-secondary text-white py-1 w-full text-center my-1"><?= htmlspecialchars($tag) ;?></span>
                <?php endforeach; ?>
            </div>   
        </li>
        <?php endforeach; ?>
    </ul>
</div>
