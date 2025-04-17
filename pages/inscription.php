<?php include '../inc/header.php';?>

<main>
<form action="traitement.php" method="post">
    <input type="text" name="lastname" id="lastname" placeholder="nom" maxlength="150">
    <br>
    <input type="email" name="email" id="email" placeholder="email" maxlength="250">
    <br>
    <input type="password" name="password" id="password" placeholder="mot de passe" minlength="5">
    <br>
    <input type="submit" value="entrez">
</form>
</main>
<aside>

</aside>