<?php
session_start();
require("inc/dbconnect.php");
// include("inc/header/header.php");
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

echo '<h2>Contenu de votre panier</h2><ul>';
if (isset($_SESSION['panier']) && count($_SESSION['panier'])>0){
    $total_panier = 0;
    
    
    foreach($_SESSION['panier'] as $idTeille=>$article_acheté){
        if (isset($article_acheté['nom']) && isset($article_acheté['prix'])){
            echo '<li><form action="./delete.php" method="get">', $article_acheté['nom'], ' (', number_format($article_acheté['prix'], 2, ',', ' '), ' €) ',
            '<input type="hidden" name="idTeille" value="', $idTeille , '" /><br>
            <br />Qté:' . '  ' . $article_acheté['qte'] . '<br><br>
            
            <input type="submit" name="supprimer" value="supprimer" />
            </form>
            </li>';
            
            // Calcule le prix total du panier 
            $total_panier += $article_acheté['prix']  * $article_acheté['qte'];
        }
        
}
echo "<a href='./vins.php'>Ajouter un autre article<a> <br> <br><a href='./meurs.php'>Annulez votre commande<a>";
    echo '<hr><h3>Total: ', number_format($total_panier, 2, ',', ' '), ' €'; // Affiche le total du panier
  }
  else { echo 'Votre panier est vide'; } // Message si le panier est vide
  echo "</ul>";
  ?>





 
<?php
// include("inc/footer/footer.php");
?> 




 