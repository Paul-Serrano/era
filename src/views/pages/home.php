<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold">Welcome to My Website</h1>
    <p class="mt-4">Here are the users:</p>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= htmlspecialchars($user['name']) ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php include __DIR__ . '/../components/cover/cover.php'; ?>
<?php include __DIR__ . '/../components/carousel/carousel.php'; ?>
<?php include __DIR__ . '/../components/block1/block1.php'; ?>
<?php include __DIR__ . '/../components/slider/slider.php'; ?>
<?php include __DIR__ . '/../components/offers/offers.php'; ?>
<?php include __DIR__ . '/../components/link/link.php'; ?>
