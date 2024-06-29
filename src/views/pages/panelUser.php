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

    <div class="flex justify-evenly items-center fixed bottom-0 left-0 py-5 w-full bg-[#fefefe] border-t-2 border-featureInput">
        <button id="homeButton" class="flex flex-col justify-evenly items-center w-1/4"><img src="../../assets/img/featureHome.png" alt=""><p>Home</p></button>
        <button id="toolsButton" class="flex flex-col justify-evenly items-center w-1/4"><img src="../../assets/img/featureTool.png" alt=""><p>Mes Outils</p></button>
        <button id="forumButton" class="flex flex-col justify-evenly items-center w-1/4"><img src="../../assets/img/featureForum.png" alt=""><p>Forum</p></button>
    </div>
</div>

<script src="/src/views/scripts/panelUser.js"></script>