<?php

?>

<div>
    <section class="w-3/4 m-auto my-5" id="purchaseSection">
        <?php include_once __DIR__ . '/../components/User/purchase.php' ?> 
    </section>

    <section class="w-3/4 m-auto my-5 hidden" id="featureSection">
        <?php include_once __DIR__ . '/../components/User/feature.php' ?> 
    </section>

    <section class="w-3/4 m-auto my-5 hidden" id="forumSection">
        <?php include_once __DIR__ . '/../components/User/forum.php' ?> 
    </section>

    <div>
        <button id="homeButton">home</button>
        <button id="toolsButton">mes outils</button>
        <button id="forumButton">forum</button>
    </div>
</div>

<script src="/src/views/scripts/panelUser.js"></script>