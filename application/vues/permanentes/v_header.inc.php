<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo Chemins::STYLES . "style.css" ?>" />
    <link rel="icon" href="<?php echo Chemins::IMAGES . 'pp.jpg' ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=SUSE+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">

    <title>Portfolio</title>
</head>

<body>

    <?php
    if (!isset($_REQUEST['controleur'])) { ?>
        <header class="header" id="header">
            <div class="burger" id="burger">
                ☰
            </div>
            <p class="Name">Tannou Rewann</p>
            <nav class="navBar">
                <ul class="conteneurList" id="menu">
                    <li><a href="#presentation" class="active">Accueil</a></li>
                    <li><a href="#MesDocuments" class="hidenDOC">Mes documents</a></li>
                    <li><a href="#projets">Projets</a></li>
                    <li><a href="#competences">Compétences</a></li>
                    <li><a href="index.php?controleur=Contact&action=afficherContact">Contact</a></li>
                </ul>
            </nav>
        </header>
    <?php } else { ?>
        <header class="header" id="header">
            <div class="burger" id="burger">
                ☰
            </div>
            <p class="Name">Tannou Rewann</p>
            <nav class="navBar">
                <ul class="conteneurList" id="menu">
                    <li><a href="index.php?#presentation" class="active">Accueil</a></li>
                    <li><a href="index.php#MesDocuments" class="hidenDOC">Mes documents</a></li>
                    <li><a href="index.php?#projets">Projets</a></li>
                    <li><a href="index.php?#competences">Compétences</a></li>
                    <li><a href="index.php?controleur=Contact&action=afficherContact">Contact</a></li>
                </ul>
            </nav>
        </header>
    <?php } ?>