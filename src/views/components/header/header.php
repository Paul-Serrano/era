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
</head>
<body class="font-gothamBook">
    <?php include_once __DIR__. '/../nav/nav.php';
