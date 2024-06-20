<?php session_start();

$user = $_SESSION['user'] ?? null;

?>

<!DOCTYPE html>
<html lang="fr-Fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mouv'up, by era</title>
    <link href="/style.css" rel="stylesheet">
    <link href="/tailwind.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/ju058cy533lkqqei90u4kr1mzf6v2eelbtjohu2psd6e28s7/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body class="font-gothamBook">
    <?php include_once __DIR__. '/../nav/nav.php';
