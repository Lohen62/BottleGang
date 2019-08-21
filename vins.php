<?php include "inc/header/header.php" ?>

    <div class="titleWine"><h2>Nos Rouges</h2></div>
    <div class="wine">
        <?php 
                $img = glob('img/vins/*.{png,jpeg,jpg}', GLOB_BRACE);

                foreach($img as $value){
                ?>
                <a href="">
                    <img class="nosVins" src="<?= $value ?>" alt=""/>
                </a>

        <?php } ?>
    </div>

</header>


<main class="main">
    <div class="line"></div>

    <div class="titleWine white"><h2>Nos Blancs</h2></div>
    <div class="wine blanc">
        <?php 
                $img = glob('img/vins/*.{png,jpeg,jpg}', GLOB_BRACE);

                foreach($img as $value){
                ?>
                <a href="">
                    <img class="nosVins" src="<?= $value ?>" alt=""/>
                </a>

        <?php } ?>
    </div>

    <div class="line line1"></div>

    <div class="titleWine rose"><h2>Nos Rosés</h2></div>
    <div class="wine rosé">
        <?php 
                $img = glob('img/vins/*.{png,jpeg,jpg}', GLOB_BRACE);

                foreach($img as $value){
                ?>
                <a href="">
                    <img class="nosVins" src="<?= $value ?>" alt=""/>
                </a>

        <?php } ?>
    </div>

    <div class="line line2"></div>

    <div class="titleWine bord"><h2>Nos Bordeaux</h2></div>
    <div class="wine bordeaux">
        <?php 
                $img = glob('img/vins/*.{png,jpeg,jpg}', GLOB_BRACE);

                foreach($img as $value){
                ?>
                <a href="">
                    <img class="nosVins" src="<?= $value ?>" alt=""/>
                </a>

        <?php } ?>
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


<?php include "inc/footer/footer.php"; ?>