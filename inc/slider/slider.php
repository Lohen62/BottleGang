<div class="main-carousel">
        <?php 
                $img = glob('img/slider/*.{png,jpeg,jpg}', GLOB_BRACE);

                foreach($img as $value){
                ?>
                <img class="carousel-cell" src="<?= $value ?>" alt="photo de léopard des neiges"/>

        <?php } ?> 
</div>

<div class="infos">
        <p class="pres">Depuis l'ouverture de leurs première cave en 1939, cette fabrique famillial de luxe, Bottle Gang , s'éfforce de produire et vendre, des vins riche, d'histoires, de qualitées, et de saveurs  uniques, afin de ravire vos palais.</p>
        <p class="pres it">"Une belle robe pour un vin de caractère".</p>
        <a class="btn" href="./vins.php">voir nos produits</a>
</div>

</header>