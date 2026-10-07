<?php
$conn = new mysqli("localhost", "root", " ", "safia_db");

if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
} else {
    echo "Connexion réussie";
}

?> 