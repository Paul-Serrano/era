<div class="flex flex-col justify-evenly items-center lg:grid lg:grid-cols-3">
    <?php foreach($data['newsletters'] as $newsletter): ?>
        <div class="flex flex-col border-secondary border-2 rounded-xl my-5 p-2 w-full">
            <p><?= htmlspecialchars($newsletter->getMail()) ?></p>
            <p><?= htmlspecialchars($newsletter->getFirstname()) ?> <?= htmlspecialchars($newsletter->getLastname()) ?></p>
            <form action="/deleteNewsletter" method="POST">
                <input type="hidden" name="newsletterMail" value="<?= htmlspecialchars($newsletter->getMail()) ?>">
                <button type="submit" class="bg-red-500 text-white font-bold py-2 px-4 rounded mt-2">Delete</button>
            </form>
        </div>
    <?php endforeach; ?>
</div>
