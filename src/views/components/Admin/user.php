<div class="flex flex-col justify-evenly items-center lg:grid lg:grid-rows-3"></div>
<?php foreach($data['users'] as $user): ?>
    <div class="flex flex-col border-secondary border-2 rounded-xl my-5 p-2">
        <p><?= htmlspecialchars($user->getEmail()) ?></p>
        <p><?= htmlspecialchars($user->getFirstname()) ?> <?= htmlspecialchars($user->getLastName()) ?></p>
        <p><?= htmlspecialchars($user->getJob()) ?></p>
        <p><?= htmlspecialchars($user->getDescription()) ?></p>
    </div>
<?php endforeach; ?>