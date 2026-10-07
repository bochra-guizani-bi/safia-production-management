<!DOCTYPE html>
<html>
<head>
    <title>Login SAFIA</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            text-align: center;
        }

        .login-box {
            background: white;
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        img {
            width: 100px;
            margin-bottom: 15px;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

<div class="login-box">

    <img src="logo.png">

    <h3>Connexion SAFIA</h3>

    <form method="POST">
        <input type="text" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br>
        <button type="submit">Se connecter</button>
        
    </form>
    <a href="register.php">Créer un compte</a>
</div>

</body>
</html>

<?php

include "connexion.php";

if(isset($_POST['email'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE email='$email' AND password='$password'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        header("Location: index.php");
    } else {
        echo "<p style='color:red;'>Login incorrect</p>";
    }
}


?>