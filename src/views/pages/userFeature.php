<?php

?>
<div id="steps" class="w-[80%] m-auto items-center">
        <!-- Step 1 -->
    <div id="step1" class="flex flex-col items-center">
        <?php include_once __DIR__ . '/../components/Feature/step1.php' ?>
    </div>
    <!-- Step 2 -->
    <div id="step2" class="hidden flex-col items-center">
        <?php include_once __DIR__ . '/../components/Feature/step2.php' ?>
    </div>
    <!-- Step 3 -->
    <div id="step3" class="hidden">
        <?php include_once __DIR__ . '/../components/Feature/step3.php' ?>
    </div>
    <!-- Step 4 -->
    <div id="step4" class="hidden">
        <?php include_once __DIR__ . '/../components/Feature/step4.php' ?>  
    </div>
    <!-- Step 5 -->
    <div id="step5" class="hidden">
        <?php include_once __DIR__ . '/../components/Feature/step5.php' ?>
    </div>
    <!-- Step 6 -->
    <div id="step6" class="hidden">
        <?php include_once __DIR__ . '/../components/Feature/step6.php' ?>
    </div>
    <!-- Step 7 -->
    <div id="step7" class="hidden">
        <?php include_once __DIR__ . '/../components/Feature/step7.php' ?>
    </div>
    <!-- Step 8 -->
    <div id="step8" class="hidden">
        <?php include_once __DIR__ . '/../components/Feature/step8.php' ?>
    </div>
    <!-- Step 9 -->
    <div id="step9" class="hidden">
        <?php include_once __DIR__ . '/../components/Feature/step9.php' ?>
    </div>
    <!-- Step 10 -->
    <div id="step10" class="hidden"></div>
    <!-- Step 11 (loader) -->
    <div id="step11" class="step" style="display:none;">
        <h2>Calcul en cours</h2>
        <div id="spinner">
        </div>
    </div>
    <!-- Step 12 (recommendations) -->
    <div id="step12" class="step" style="display:none;">
        <h2>Recommandations</h2>
        <div id="recommendations"></div>
    </div>
</div>
<script src="/src/views/scripts/feature.js"></script>

