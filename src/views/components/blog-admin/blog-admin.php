<div>
    <label for="addTag">Ajouter un Tag :</label>
    <input name="addTag" type="text" />
    
    <button type="submit" name="tagSubmit" value="yes">Ajouter un Tag à la liste</button>
</div>

<div>
    <div class="formGroup">
        <label for="articleTitle">Title</label>
        <input class="border-1 border-black" name="articleTitle" value="" type="text" />
    </div>

    <div class="formGroup">
        <label for="articleContent">Content</label>
        <input class="border-1 border-black" name="articleContent" value="" type="password" />
    </div>

    <div class="formGroup">
        <label for="articleTags">Tags</label>
        <select name="articleTag" id="articleTag">
            <option value="">--- Choisissez un tag pour votre article ---</option>
            <?php foreach ($tags as $tag): ?>
                <option value="<?= htmlspecialchars($tag->getName()) ?>"><?= htmlspecialchars($tag->getName()) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div id="selected-tags"></div>

    <div id="hidden-fields-container"></div>

    <button type="submit" name="articleSubmit" value="yes">Update</button>
</div>
<script src="/src/views/components/blog-admin/blog-admin.js"></script>
