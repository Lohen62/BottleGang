<?php 
session_start();
require("inc/dbconnect.php"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/headerVins.css">
    <link rel="stylesheet" href="./css/centre.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="stylesheet" href="./css/flickity.min.css">
    <link rel="stylesheet" href="./css/vins.css">
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
           
            
            
</header>

<main class="main">
    <div class="titleWine"><h2>Nos Rouges</h2></div>
    <div class="wine">
        <div class="main-carousel">
            <?php 
          $sql = "SELECT * FROM vins WHERE type = 'Rouge'";
                $data = $bdd->query($sql);

                $data->setFetchMode(PDO::FETCH_OBJ);
            
            while($rows = $data->fetch())
            {
                // echo 'id : '. $rows->id . " / name : " . $rows->nom . "<br>";
                echo "<div class='carousel-cell carvin'>
                           <div class='teille'> <img class='teilleimg 'src='./img/vins/". $rows->image ."' alt=''></div>
                           <div class='info'>
                                <h3 class='teilletitle'>" . $rows->nom ."</h3>
                                <p class='desk'>". $rows->description ."</p>
                                <p class='prix'>" . $rows->prix . " € </p>
                                <form action='./panier.php' method='get'>
                                    <input type='hidden'  name='idteille' value='".$rows->id."'>
                                    <input type='hidden'  name='nomteille' value='".$rows->nom."'>
                                    <input type='hidden'  name='prixteille' value='".$rows->prix."'>
                                    
                                    <button class='acheter'>Ajouter au panier</button>
                                    <select name='qte' class='qte'>
                                        <option value='1'>1</option>
                                        <option value='2'>2</option>
                                        <option value='3'>3</option>
                                        <option value='4'>4</option>
                                        <option value='5'>5</option>
                                        <option value='6'>6</option>
                                        <option value='7'>7</option>
                                        <option value='8'>8</option>
                                        <option value='9'>9</option>
                                        <option value='10'>10</option>
                                    </select>
                                    
                                 </form>        
                           </div> 
                      </div>";
            }
        
            ?>
 
        </div>
    </div>

    <div class="line"></div>

    <div class="titleWine white"><h2>Nos Blancs</h2></div>
    <div class="wine blanc">
        <div class="main-carousel">
            <?php 
          $sql = "SELECT * FROM vins WHERE type = 'Blanc'";
                $data = $bdd->query($sql);

                $data->setFetchMode(PDO::FETCH_OBJ);
            
            while($rows = $data->fetch())
            {
                // echo 'id : '. $rows->id . " / name : " . $rows->nom . "<br>";
                echo "<div class='carousel-cell carvin'>
                           <div class='teille'> <img class='teilleimg 'src='./img/vins/". $rows->image ."' alt=''></div>
                           <div class='info'>
                                <h3 class='teilletitle'>" . $rows->nom ."</h3>
                                <p class='desk'>". $rows->description ."</p>
                                <p class='prix'>" . $rows->prix . " € </p>
                                <form action='./panier.php' method='get'>
                                    <input type='hidden'  name='idteille' value='".$rows->id."'>
                                    <input type='hidden'  name='nomteille' value='".$rows->nom."'>
                                    <input type='hidden'  name='prixteille' value='".$rows->prix."'>
                                    <button class='acheter'>Ajouter au panier</button>
                                    <select name='qte' class='qte'>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option>
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                    </select>
                            </form>        
                           </div> 
                      </div>";
            }
        
            ?>
 
        </div>    
    </div>

    <div class="line line1"></div>

    <div class="titleWine rose"><h2>Nos Rosés</h2></div>
    <div class="wine rosé">
    <div class="main-carousel">
            <?php 
          $sql = "SELECT * FROM vins WHERE type = 'Rose'";
                $data = $bdd->query($sql);

                $data->setFetchMode(PDO::FETCH_OBJ);
            
            while($rows = $data->fetch())
            {
                // echo 'id : '. $rows->id . " / name : " . $rows->nom . "<br>";
                echo "<div class='carousel-cell carvin'>
                           <div class='teille'> <img class='teilleimg 'src='./img/vins/". $rows->image ."' alt=''></div>
                           <div class='info'>
                                <h3 class='teilletitle'>" . $rows->nom ."</h3>
                                <p class='desk'>". $rows->description ."</p>
                                <p class='prix'>" . $rows->prix . " € </p>
                                <form action='./panier.php' method='get'>
                                    <input type='hidden'  name='idteille' value='".$rows->id."'>
                                    <input type='hidden'  name='nomteille' value='".$rows->nom."'>
                                    <input type='hidden'  name='prixteille' value='".$rows->prix."'>
                                    <button class='acheter'>Ajouter au panier</button>
                                    <select name='qte' class='qte'>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option>
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                    </select>
                            </form>        
                           </div> 
                      </div>";
            }
        
            ?>
 
        </div>    
    </div>

    <div class="line line2"></div>

    <div class="titleWine bord"><h2>Nos Champagnes</h2></div>
    <div class="wine bordeaux">
    <div class="main-carousel">
            <?php 
          $sql = "SELECT * FROM vins WHERE type = 'Champagne'";
                $data = $bdd->query($sql);

                $data->setFetchMode(PDO::FETCH_OBJ);
            
            while($rows = $data->fetch())
            {
                // echo 'id : '. $rows->id . " / name : " . $rows->nom . "<br>";
                echo "<div class='carousel-cell carvin'>
                           <div class='teille'> <img class='teilleimg 'src='./img/vins/". $rows->image ."' alt=''></div>
                           <div class='info'>
                                <h3 class='teilletitle'>" . $rows->nom ."</h3>
                                <p class='desk'>". $rows->description ."</p>
                                <p class='prix'>" . $rows->prix . " € </p>
                                <form action='./panier.php' method='get'>
                                    <input type='hidden'  name='idteille' value='".$rows->id."'>
                                    <input type='hidden'  name='nomteille' value='".$rows->nom."'>
                                    <input type='hidden'  name='prixteille' value='".$rows->prix."'>
                                    <button class='acheter'>Ajouter au panier</button>
                                    <select name='qte' class='qte'>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option>
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                    </select>
                            </form>        
                           </div> 
                      </div>";
            }
        
            ?>
 
        </div>    
    </div>

    </div>

</main>








<!-- création de la div contenant toutes les informations -->
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
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="./js/scriptVins.js"></script>
<script src="js/ttt.min.js"></script>     

</body>
</html>