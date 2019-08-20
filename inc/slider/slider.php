<div class="main-carousel">
        <?php 
                $img = glob('img/slider/*.{png,jpeg,jpg}', GLOB_BRACE);

                foreach($img as $value){
                ?>
                <img class="carousel-cell" src="<?= $value ?>" alt="photo de léopard des neiges"/>

        <?php } ?> 
</div>

</header>