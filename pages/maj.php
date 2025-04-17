<?php
 
if( isset($_POST["lastname"]) && !empty($_POST["lastname"])
&& isset($_POST["email"]) && !empty($_POST["email"])
&& isset($_POST["password"]) && !empty($_POST["password"])
&& isset($_POST["id"]) && !empty($_POST["id"])
):
 
 
$nom = htmlspecialchars($_POST["lastname"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);
$id = htmlspecialchars($_POST["id"]);  
 
include '../inc/connexion.php';
$sql = "UPDATE clients SET nom='$nom', email='$email', mot_de_passe='$password' WHERE id='$id'";
 
if($connexion->query($sql)){
    header('Location:liste.php');
} else{
    header('Location:liste.php');
 
}
endif;