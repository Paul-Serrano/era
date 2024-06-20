<?php

$user = $_SESSION['user'] ?? null;
if(!$user || !$user->isAdmin()) {
    var_dump($user);
    header('Location: /');
}

?>

<section class="w-3/4 m-auto my-5">
    <h1>Blog</h1>
    <form action="/postTag" method="POST" class="flex justify-between items-center">
        <div class="w-1/3">
            <label for="addTag">Ajouter un Tag :</label>
            <input class="border-black border-2 rounded-xl px-4 py-1" name="addTag" type="text" placeholder="Nom du tag" />
            
            <button type="submit" name="tagSubmit" value="yes">Ajouter un Tag à la liste</button>
        </div>

        <ul class="w-1/3">
            <h2 class="px-5 py-2 bg-black text-white">Tags Existants</h2>
            <?php foreach ($data['tags'] as $tag): ?>
                <li class="flex justify-between w-full items-center">
                    <p><?= htmlspecialchars($tag->getName()) ?></p>
                    <form action="/deleteTag" method="POST">
                        <input type="hidden" name="tagToDelete" value="<?= htmlspecialchars($tag->getName()) ?>" />
                        <button class="text-[#ff0000]" type="submit" name="deleteTagSubmit" value="yes">Supprimer</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </form>
    <hr class="w-full bg-black h-2 my-5" />
    <form action="/postArticle" method="POST">
        <div>
            <div class="formGroup">
                <label for="articleTitle">Title</label>
                <input class="border-black border-2 rounded-xl px-4 py-1" name="articleTitle" value="" type="text" />
            </div>

            <div class="formGroup">
                <label for="articleContent">Content</label>
                <input class="border-black border-2 rounded-xl px-4 py-1" name="articleContent" value="" type="text" />
            </div>

            <div class="formGroup">
                <label for="articleTags">Tags</label>
                <select name="articleTag" id="articleTag">
                    <option value="">--- Choisissez un tag pour votre article ---</option>
                    <?php foreach ($data['tags'] as $tag): ?>
                        <option value="<?= htmlspecialchars($tag->getName()) ?>"><?= htmlspecialchars($tag->getName()) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div id="selected-tags"></div>

            <div id="hidden-fields-container"></div>

            <button type="submit" name="articleSubmit" value="yes">Update</button>
        </div>
        <h2 class="px-5 py-2 bg-black text-white my-5">Articles Existants</h2>
        <ul class="grid grid-cols-3 space-x-2 space-y-2">
            <?php foreach ($data['articles'] as $article): ?>
            <li class="border-black border-2 p-2">
                <h2><?= htmlspecialchars($article->getTitle()) ?></h2>
                <p><?= htmlspecialchars($article->getAutor()) ?></p>
                <div>
                    <?php foreach ($article->getTags() as $tag):?>
                        <span class="bg-black text-white rounded-xl p-2"><?= htmlspecialchars($tag) ;?></span>
                    <?php endforeach; ?>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </form>
</section>
<script src="/src/views/scripts/admin.js"></script>



