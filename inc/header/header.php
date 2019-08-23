<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/centre.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="stylesheet" href="./css/flickity.min.css">
    <link rel="stylesheet" href="./css/Apropos.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <title>BottleGang Accueil</title>
</head>


<body>
    <header>
    <nav class="navbar">
        <div class="logoName">
            <img src="./img/logo.png" alt="logo"><h1>Bottle Gang</h1>
        </div>
        <ul class="menu">
            <li><a href="index.php" class="itemMenu">Accueil</a></li>
            <li><a href="Apropos.php" class="itemMenu">A propos</a></li>
            <li><a href="vins.php" class="itemMenu">Nos vins</a></li>
            <i class="panier fas fa-cart-plus">
                <?php
                    if(isset($_SESSION["panier"])){
                        echo '<div class="nbrArticles">' .count($_SESSION['panier']). '</div>';
                    }
                    else{
                        echo '<div class="nbrArticles">0</div>';
                    }

                ?>
            </i>
            <li><a href="panier.php" class="itemMenu">Panier</a></li>
        </ul>
    </nav>
