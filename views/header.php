<?php
require_once __DIR__ . '/../config/cookies.php'

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Origami RSS</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>

<body>
    <header>
        <div id="headerCat">
            <?php
            foreach ($displayTopics as $key => $value) { ?>
                <a href="/controllers/pagesCtrl.php?display=<?=$key?>" class="headerButtonCat" id="headerButtonCat1"><?= $key ?></a>
            <?php } ?>


        </div>
        <div id="headerLogo">
            <img src="../public/assets/img/logo.svg" alt="">
        </div>
        <div id="headerSettings">
            <!-- 2 boutons -->
            <i id="settingsBtn" class="fa-solid fa-gear"></i>
            <i id="darkBtn" class="fa-solid fa-circle-half-stroke"></i>
        </div>
    </header>
    <main>
        <!-- ================ HEADER ============== -->