<?php
 
if(isset($_POST["id"]) && !empty($_POST["id"])):
 
    $x = htmlspecialchars($_POST["id"]);
    $sql = "DELETE FROM clients WHERE id='$x'";
    include '../inc/connexion.php';
 
    if($connexion->query($sql)){
        header('Location:liste.php');
    } else{
        header('Location:liste.php');
    }
    endif;