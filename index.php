<!-- public/index.php -->
<?php

// require_once '../src/db.php';
// require_once '../src/routes.php';

?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Era Landing Page</title>
        <link href="tailwind.css" rel="stylesheet">
    </head>
    <body>
        <?php include 'public/components/nav/nav.php'; ?>
        <?php include 'public/components/cover/cover.php'; ?>
        <?php include 'public/components/carousel/carousel.php'; ?>
        <?php include 'public/components/block1/block1.php'; ?>
        <?php include 'public/components/slider/slider.php'; ?>
        <?php include 'public/components/offers/offers.php'; ?>
        <?php include 'public/components/link/link.php'; ?>
        <?php include 'public/components/footer/footer.php'; ?>
    </body>
</html>
