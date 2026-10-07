<?php
include "connexion.php";

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM commande WHERE id=$id");
$row = $result->fetch_assoc();
?>

<form method="POST">
    <input type="text" name="nom" value="<?php echo $row['nom']; ?>"><br>
    <input type="text" name="produit" value="<?php echo $row['produit']; ?>"><br>
    <input type="number" name="quantite" value="<?php echo $row['quantite']; ?>"><br>
    <button type="submit">Modifier</button>
</form>

<?php
if(isset($_POST['nom'])){
    $nom = $_POST['nom'];
    $produit = $_POST['produit'];
    $quantite = $_POST['quantite'];

    $sql = "UPDATE commande 
            SET nom='$nom', produit='$produit', quantite='$quantite'
            WHERE id=$id";

    $conn->query($sql);

    header("Location: afficher.php");
}
?>