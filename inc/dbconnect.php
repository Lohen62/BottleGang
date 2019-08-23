<?php 
    $rootUser = "root";
    $rootPass = "vMuZ7mkDJRbIYcz5";


    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=vins;charset=utf8', $rootUser, $rootPass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

?>