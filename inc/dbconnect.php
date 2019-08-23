<?php 
    $rootUser = "gauthier2";
    $rootPass = "AcdVH#33by";


    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bottlegang;charset=utf8', $rootUser, $rootPass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

?>