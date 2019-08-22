<?php
require("inc/dbconnect.php");
session_start();


$panier = [1,2,3,4];
$panier = implode(",",$panier);

var_dump($panier);


include("inc/header/header.php");



// $sql = "SELECT * FROM vins WHERE id = '" . $panier ."' ";

$sql = "SELECT * FROM vins WHERE id IN ($panier)";
  $data = $bdd->query($sql);

  $data->setFetchMode(PDO::FETCH_OBJ);

    echo "<br> <br> <br> <br> <br>";

        function DeleteId(){
            array_splice($panier,$rows->id,1);
        }

   
?>
    <table>
        <thead>
            <tr>
            <td></td>
            <td>Nom</td>
            <td>Annee</td>
            <td>Description</td>
            <td>Prix</td>
            <td>Effacer</td>
            </tr>
        </thead>
        <tbody>

     <?php 

        while($rows = $data->fetch()){
        echo " 
                <tr>
                    <td></td>
                    <td> " .$rows->nom . "  </td>
                    <td>" .$rows->annee . " </td>
                    <td>" .$rows->description . " </td>
                    <td>" .$rows->prix . " € </td>
                    <td> <button onclick='DeleteId()'>Supprimez-moi!</button> </td>
               </tr>
                ";
            }
    ?>
        </tbody>
    </table>


</header>

<!-- while($rows = $data->fetch()){
        echo 'id : '. $rows->id . " / name : " . $rows->nom . "<br>"; -->

<?php
include("inc/footer/footer.php");
?>





