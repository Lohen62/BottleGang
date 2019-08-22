<?php
require("inc/dbconnect.php");
session_start();
$panier = 6;
include("inc/header/header.php");

$sql = "SELECT * FROM vins WHERE id = '" . $panier ."' ";

    echo "<br> <br> <br> <br> <br>";

    $data = $bdd->query($sql);

    $data->setFetchMode(PDO::FETCH_OBJ);

    while($rows = $data->fetch()){
        echo 'id : '. $rows->id . " / name : " . $rows->nom . "<br>";
}
?>

</header>



<?php
include("inc/footer/footer.php");
?>





