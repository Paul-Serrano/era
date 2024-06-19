<?php session_start();

$path = $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html lang="fr-Fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mouv'up, by era</title>
    <link href="/style.css" rel="stylesheet">
    <link href="/tailwind.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.2.2/dist/cdn.min.js" defer></script>
</head>
<body class="font-gothamBook">
    <?php if(strpos($path, 'admin/update') === 1 ) {
        include_once __DIR__ . '/../nav-admin/nav-admin.php';
    }

    else if(!strpos($path, 'admin')) {
        include_once __DIR__. '/../nav/nav.php';
    }
