<?php
session_start();
include '../inc/header.php' ?>
 
 
<form action="traitement.php" method="post">
    <input type="text" name="lastname" id="lastname" placeholder="nom" maxlength="150">
    <br>
    <input type="text" name="firstname" id="firstname" placeholder="prenom" maxlength="150">
    <br>
    <input type="email" name="email" id="email" placeholder="email" maxlength="250">
    <br>
    <input type="submit" value="entrez">
</form>

<?php include '../inc/footer.php';