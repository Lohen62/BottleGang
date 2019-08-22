<?php 
    $rootUser = "root";
    $rootPass = "";


    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bottlegqng;charset=utf8', $rootUser, $rootPass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }


?>