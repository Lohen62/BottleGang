<?php session_start();
require("inc/dbconnect.php");

$idTeille = $_GET['idTeille'];
unset($_SESSION['panier'][$idTeille]); 


header("Location: panier.php");