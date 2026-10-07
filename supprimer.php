<?php
include "connexion.php";

$id = $_GET['id'];

$sql = "DELETE FROM commande WHERE id=$id";

$conn->query($sql);

header("Location: afficher.php");
?>