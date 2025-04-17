<?php
session_start();

if(isset($_POST["lastname"]) && !empty($_POST["lastname"])
&& isset($_POST["firstname"]) && !empty($_POST["firstname"])
&& isset($_POST["email"]) && !empty($_POST["email"])
):

$nom = htmlspecialchars($_POST["lastname"]);
$prenom = htmlspecialchars($_POST["firstname"]);
$email = htmlspecialchars($_POST["email"]);


$sql = "INSERT INTO clients(nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";
include '../inc/connexion.php';


if($connexion->query($sql)){
    header('Location:succes.php');
} else{
    header('Location:../inc/header.php');
}
endif;


