<?php define('BASE','/projet_web-main/'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJET</title>
    <link rel="stylesheet" href="<?= BASE ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASE ?>/css/mobile.css">
</head>
<body>
    <header>
        <h1>
            <a href="<?= BASE ?>">
                <img src="<?= BASE ?>image/vinlye.png" alt="logo">
            </a>
            Unreleased music
        </h1>
        <form name="recherche.php" method="post">
            <input type="search" id="recherche" name="recherche" placeholder="recherche..." maxlength="200">
            <input type="image" src="<?= BASE ?>image/loupe.png" alt="">
        </form>
    </header>

    <nav>
        <a href="<?= BASE ?>">acceuil</a>
        <a href="<?= BASE ?>pages/artiste.php">artiste</a>
        <a href="<?= BASE ?>pages/genre.php">genre</a>
        <a href="<?= BASE ?>pages/inscription.php">Inscription</a>
        
    </nav>

    


