<?php include '../inc/header.php';
 
?>
 
<main>
    <h2>Tableau des inscrits</h2>
    <table summary="">
        <caption>Tableau des incrits</caption>
        <thead>
            <tr>
                <td>Nom</td>
                <td>Email</td>
                <td>Mot de passe</td>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../inc/connexion.php';
            $sql = "SELECT * FROM clients";
            $info = $connexion->query($sql);
            foreach ($info as $i):
                ?>
 
                <tr>
                    <td><?= strtoupper($i['nom']) ?></td>
                    <td><?= ucfirst(strtolower($i['email'])) ?></td>
                    <td><?= ucfirst(strtolower($i['mot_de_passe'])) ?></td>
                    <td>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $i['id'] ?>">
                            <input type="image" src="../image/supprimer.png" class="icone">
                        </form>
                    </td>
                    <td>
                        <form action="modifier.php" method="post">
                            <input type="hidden" name="id" value="<?= $i['id'] ?>">
                            <input type="image" src="../image/modifier.png" class="icone">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
 
</main>
<aside></aside>
 
 
<?php include '../inc/footer.php';