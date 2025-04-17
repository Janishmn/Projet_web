<?php
 
 
if(isset($_POST["password"]) && !empty($_POST["password"])
&& isset($_POST["lastname"]) && !empty($_POST["lastname"])
&& isset($_POST["email"]) && !empty($_POST["email"])
):
 
$nom = htmlspecialchars($_POST["lastname"]);
$password = htmlspecialchars($_POST["password"]);
$email = htmlspecialchars($_POST["email"]);
 
 
$sql = "INSERT INTO clients(nom, email, mot_de_passe) VALUES ('$nom', '$email', '$password')";
include '../inc/connexion.php';
 
 
if($connexion->query($sql)){
    header('Location:liste.php');
} else{
    header('Location:../inc/header.php');
}
endif;
 
 
 