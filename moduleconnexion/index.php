<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Bonjour, veuillez vous connecter pour continuer</h1>
        <?php require "connexion.php"; ?>
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password);
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
        ?>
    </body>
</html>

<?phpsession_start();
echo $_SESSION['pseudo'];
?>

<?php require "header.php"; ?>