<?php require './inc/dbconnect.php';

$name = $_POST["name"];
$year = $_POST["year"];
$img = $_POST["img"];
$desc = $_POST["desc"];
$price = $_POST["price"];
$color = $_POST["color"];


$sql = "INSERT INTO vins (nom, annee, image, description, prix, type) VALUES ('" . $name . "','" . $year . "','" . $img . "','" . $desc . "','" . $price . "','" . $color . "')";
$bdd->query($sql);

?>