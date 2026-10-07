<?php
include "connexion.php";

$result = $conn->query("SELECT * FROM commande");

echo "<h2>Liste des commandes</h2>";

while($row = $result->fetch_assoc()) {
    echo "Client: " . $row['nom'] . 
         " | Produit: " . $row['produit'] . 
         " | Quantité: " . $row['quantite'];

    echo " <a href='supprimer.php?id=".$row['id']."'>❌ Supprimer</a><br>";
    echo " <a href='modifier.php?id=".$row['id']."'>✏️ Modifier</a>";
}
?>