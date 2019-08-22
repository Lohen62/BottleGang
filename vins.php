<?php include "inc/header/header.php";
require("inc/dbconnect.php"); 


?>
            
            

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
                                <form action='./panier.php' method='post'>
                                <input type='hidden'  name='idteille' value='".$rows->id."'>
                                <button class='acheter'>Ajouter au panier</button>
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

    </div>

    <div class="line line1"></div>

    <div class="titleWine rose"><h2>Nos Rosés</h2></div>
    <div class="wine rosé">

    </div>

    <div class="line line2"></div>

    <div class="titleWine bord"><h2>Nos Bordeaux</h2></div>
    <div class="wine bordeaux">

    </div>

    <div class="line line3"></div>

    <div class="titleWine champ"><h2>Nos Champagnes</h2></div>
    <div class="wine champagne">
        <?php 
                $img = glob('img/vins/*.{png,jpeg,jpg}', GLOB_BRACE);

                foreach($img as $value){
                ?>
                <a href="">
                    <img class="nosVins" src="<?= $value ?>" alt=""/>
                </a>

        <?php } ?>
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
            <h2 class="titreFooter">réseaux sociaux</h2>
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