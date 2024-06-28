<?php

$user = $_SESSION['user'] ?? null;
if(!$user || !$user->isAdmin()) {
    header('Location: /');
}

?>

<div class="select-container w-3/4 m-auto my-5">
    <label for="sectionSelect">Select Section:</label>
    <select id="sectionSelect" class="bg-secondary text-white font-bold p-2">
        <option value="feature" class="text-white font-bold p-2">Feature Section</option>
        <option value="user" class="text-white font-bold p-2">User Section</option>
        <option value="blog" class="text-white font-bold p-2">Blog Section</option>
        <option value="lang" class="text-white font-bold p-2">Language Section</option>
        <option value="newsletter" class="text-white font-bold p-2">Newsletter Section</option>
    </select>
</div>

<section class="w-3/4 m-auto my-5" id="featureSection">
    <?php include_once __DIR__ . '/../components/Admin/feature.php' ?> 
</section>

<section class="w-3/4 m-auto my-5 hidden" id="userSection">
    <?php include_once __DIR__ . '/../components/Admin/user.php' ?>
</section>

<section class="w-3/4 m-auto my-5 hidden" id="blogSection">
    <?php include_once __DIR__ . '/../components/Admin/blog.php' ?> 
</section>

<section class="w-3/4 m-auto my-5 hidden" id="langSection">
    <?php include_once __DIR__ . '/../components/Admin/lang.php' ?> 
</section>

<section class="w-3/4 m-auto my-5 hidden" id="newsletterSection">
    <?php include_once __DIR__ . '/../components/Admin/newsletter.php' ?> 
</section>

<script src="/src/views/scripts/admin.js"></script>
