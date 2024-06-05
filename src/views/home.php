<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold">Welcome to My Website</h1>
    <p class="mt-4">Here are the users:</p>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= htmlspecialchars($user['name']) ?></li>
        <?php endforeach; ?>
    </ul>
</div>
