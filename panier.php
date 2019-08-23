<?php
session_start();
require("inc/dbconnect.php");
if(!isset($_SESSION['panier']))
{
    $_SESSION['panier']=array();
}

$idTeille = isset($_GET['idteille']) ? $_GET['idteille'] : null;
$nomTeille = isset($_GET['nomteille']) ? $_GET['nomteille'] : null;
$prixTeille = isset($_GET['prixteille']) ? $_GET['prixteille'] : null;
$qteTeille  = isset($_GET['qte'])  ? $_GET['qte']  : 1;

$_SESSION['panier'][$idTeille]['nom']  = $nomTeille;
$_SESSION['panier'][$idTeille]['prix'] = $prixTeille;
$_SESSION['panier'][$idTeille]['qte'] = $qteTeille;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/panier.css"> 
    <link rel="stylesheet" href="./css/footer.css">
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
            <li><a href="panier.php" class="itemMenu">Panier</a></li>
        </ul>
    </nav>
    <section>
<?php

echo '<h2 class="contenuTitle">Contenu de votre panier</h2><br><ul>';
if (isset($_SESSION['panier']) && count($_SESSION['panier'])>0){
    $total_panier = 0;
    
?> <div class="truks"> <?php
    foreach($_SESSION['panier'] as $idTeille=>$article_acheté)
    {
        if (isset($article_acheté['nom']) && isset($article_acheté['prix'])){
            echo '<li class="trucs"><form action="./delete.php" method="get">', $article_acheté['nom'], ' (', number_format($article_acheté['prix'], 2, ',', ' '), ' €) ',
            '<input type="hidden" name="idTeille" value="', $idTeille , '" /><hr><br>
            <br />Qté:' . '  ' . $article_acheté['qte'] . '<hr><br><br>
            
            <input class="supp "type="submit" name="supprimer" value="supprimer" /><br><br><br><br>
            </form>
            </li>';
            
            // Calcule le prix total du panier 
            $total_panier += $article_acheté['prix']  * $article_acheté['qte'];
        }
    } ?>
    </div>
    <?php
echo "<a class='addNew' href='./vins.php'>Ajouter un autre article<a> <br> <br><a class='cancel' href='./meurs.php'>Annulez votre commande<a>";
    echo '<hr><div class="payerTout"><h3 class="total">Total: ', number_format($total_panier, 2, ',', ' '), ' €</h3><a class="goPayer" href="">Payer</a></div>'; // Affiche le total du panier
  }
  else { echo 'Votre panier est vide'; } // Message si le panier est vide
  echo "</ul>";
  ?>


</section>


 
<div class="footer">
    <!-- création d'une première DIV global qui contient ce qui se passe au dessus de la ligne centrale. il contient 4 divs en flex. -->
    <div class="presentation">
        <div class="livraison">
        <i class="fas fa-truck"></i>
            <p class="texteFooter">
                Livraison Soignée <br> 4 à 8 jours
            </p>
        </div>

        <div class="Conseils">
        <i class="fas fa-mobile-alt"></i>
            <p class="texteFooter">
                Conseils personnalisés <br> +333 554 65 00 17
            </p>
        </div>

        <div class="paiement">
        <i class="far fa-credit-card"></i>
            <p class="texteFooter">
                Paiement sécurisé
            </p>
        </div>

        <div class="origine">
        <i class="fas fa-globe"></i>
             <p class="texteFooter">
                 Origine des produits <br>garantie
                </p>
            </div>
    </div>
    <!-- la ligne intermediaire -->
    <div class="divintermediaire">
        <div class="ligneintermediaire"></div>
    </div>

    <div id="presentation02"> 
        <div class="left">
            <h2 class="titreFooter">Bottle Gang</h2> 
            <p class="TexteFooter02"> 11-3 Rue Crébillon <br> 21700 Nuits-Saint-Georges <br> +33(0)5 54 53 00 17</p>
        </div>      
        <div class="right"> 
            <a href="https://www.facebook.com/" target=_blank> <i class="fab fa-facebook"></i></a>
            <a href="https://www.twitter.com/" target=_blank> <i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/" target=_blank>  <i class="fab fa-instagram"></i></a>
            
           
        </div>  
    </div>


</div>


</div>
<script src="https://kit.fontawesome.com/0b3a13e271.js"></script>
   

</body>
</html>


 