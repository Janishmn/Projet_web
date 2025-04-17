<?php 

if(isset($_POST["lastname"]) && !empty($_POST["lastname"])
&& isset($_POST["firstname"]) && !empty($_POST["firstname"])
&& isset($_POST["email"]) && !empty($_POST["email"])
&& isset($_POST["id"]) && !empty($_POST["id"])
):

$nom = htmlspecialchars($_POST["lastname"]);
$prenom = htmlspecialchars($_POST["firstname"]);
$email = htmlspecialchars($_POST["email"]);
$id = htmlspecialchars($_POST["id"]);  

include '../inc/connexion.php';
$sql = "UPDATE clients SET nom='$nom', prenom='$prenom', email='$email' WHERE id='$id'";

if($connexion->query($sql)){
    header('Location:liste.php');
} else{
    header('Location:liste.php');

}
endif; 