<?php
include "connexion.php";

$total = $conn->query("SELECT COUNT(*) as total FROM commande")->fetch_assoc()['total'];
?>

<h2>Dashboard SAFIA</h2>

<div style="display:flex;gap:20px;">
    <div style="background:blue;color:white;padding:20px;">
        Commandes: <?php echo $total; ?>
    </div>
</div>
<br>

<a href="index.php">Ajouter commande</a><br>
<a href="afficher.php">Voir commandes</a>