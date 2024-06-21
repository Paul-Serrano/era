<div class="my-5 w-3/4 mx-auto">
    <form method="GET" action="/blog">
        <div class="flex space-x-4">
            <select name="author" class="border p-2">
                <option value="">Tous les auteurs</option>
                <?php foreach ($data['authors'] as $author): ?>
                <option value="<?= htmlspecialchars($author['mail']) ?>" <?= (isset($_GET['author']) && $_GET['author'] == $author['mail']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($author['firstname'] . ' ' . $author['lastname']) ?>
                </option>
                <?php endforeach; ?>
            </select>

            <select name="tag" class="border p-2">
                <option value="">Tous les tags</option>
                <?php foreach ($data['tags'] as $tag): ?>
                <option value="<?= htmlspecialchars($tag->getName()) ?>" <?= (isset($_GET['tag']) && $_GET['tag'] == $tag->getName()) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($tag->getName()) ?>
                </option>
                <?php endforeach; ?>
            </select>

            <button type="submit" class="bg-black text-white p-2">Filtrer</button>
        </div>
    </form>

    <div class="my-4">
        <?php if (isset($_GET['author']) && $_GET['author'] != ''): ?>
            <p>Filtre par auteur: <strong><?= htmlspecialchars($_GET['author']) ?></strong></p>
        <?php endif; ?>
        <?php if (isset($_GET['tag']) && $_GET['tag'] != ''): ?>
            <p>Filtre par tag: <strong><?= htmlspecialchars($_GET['tag']) ?></strong></p>
        <?php endif; ?>
    </div>

    <ul class="grid grid-cols-3 space-x-2 space-y-2">
        <?php foreach ($data['articles'] as $article): ?>
        <li class="border-black border-2 p-2">
            <h2><?= htmlspecialchars($article->getTitle()) ?></h2>
            <p><?= htmlspecialchars($article->getAutor()) ?></p>
            <div class="flex justify-evenly items-center w-full my-2">
                <?php foreach ($article->getTags() as $tag): ?>
                    <span class="bg-black text-white rounded-xl p-2"><?= htmlspecialchars($tag) ;?></span>
                <?php endforeach; ?>
            </div>
            <div class="article-content">
                <div class="article-excerpt">
                    <?= substr($article->getContent(), 0, 150) ;?>...
                </div>
                <a href="/article?id=<?= $article->getId();?>">Voir plus</a>
            </div>      
        </li>
        <?php endforeach; ?>
    </ul>
</div>
