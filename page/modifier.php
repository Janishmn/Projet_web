<?php
 
if(isset($_POST["id"]) && !empty($_POST["id"])):
 
    include '../inc/connexion.php';
    $x = htmlspecialchars($_POST['id']);
    $reponse = $connexion->query("SELECT * FROM clients WHERE id='$x'");
    foreach($reponse as $rep):
        ?>
 
    <form action="maj.php" method="post">
        <input type="text" name="lastname" value="<?= $rep["nom"]?>"><br>
        <input type="text" name="firstname" value="<?= $rep["prenom"]?>"><br>
        <input type="email" name="email" value="<?= $rep["email"]?>"><br>
        <input type="hidden" name="id" value="<?= $rep['id']?>"><br>
        <input type="submit" value="modifier">
    </form>
    <?php endforeach; endif; ?>