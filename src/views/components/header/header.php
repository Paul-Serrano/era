<?php session_start();

$user = $_SESSION['user'] ?? null;

?>

<!DOCTYPE html>
<html lang="fr-Fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mouv'up, by era</title>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-M8ZFFB4C');</script>
    <link href="/style.css" rel="stylesheet">
    <link href="/tailwind.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/ju058cy533lkqqei90u4kr1mzf6v2eelbtjohu2psd6e28s7/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N3BZV51CXL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-N3BZV51CXL');
</script>
<body class="font-gothamBook bg-[#fefefe]">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8ZFFB4C"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <?php include_once __DIR__. '/../nav/nav.php';
