<?php include '../inc/header.php';

?>

<link rel="stylesheet" href="../css/tableaux.css">
<main>
    <h2>Tableau des inscrits</h2>
    <table summary="">
        <caption>Tableau des incrits</caption>
        <thead>
            <tr>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Email</td>
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
                    <td><?= ucfirst(strtolower($i['prenom'])) ?></td>
                    <td><?= ucfirst(strtolower($i['email'])) ?></td>
                    <td>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $i['id'] ?>">
                            <input type="image" src="../image/supprimer.png" classe="icone">
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