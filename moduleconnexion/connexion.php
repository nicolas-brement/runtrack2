<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "moduleconnexion";

$connexion = mysqli_connect($servername, $username, $password, $dbname);// connexion à la base de donnée

    session_start();

if(isset($_POST["Envoyer"])){
    if(isset($_POST['envoi'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
            $login = htmlspecialchars($_POST['login']);
            $mdp = htmlspecialchars($_POST['mdp']);

            $recupUser = $bdd<>prepare('SELECT `login`, `password` FROM `utilisateurs` WHERE 1');
            $recupUser->execute(array($login, $mdp));

            if($recupUser->rowCount() > 0){
                $_SESSION['login'] = $login;
                $_SESSION['mdp'] = $mdp;
                $_SESSION['id'] = $recupUser->fetch()['id'];
                header('Location: profil.php');

            }else {
                echo "Votre mot de passe ou pseudo est incorrect";
            }
            }else{
        echo "Veuillez compléter tout les champs...";
    }
}
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <meta charset="utf-8">
</head>
<body>

    <form method="POST" action="">

        <label for="pseudo" class="form-label">Pseudo:</label>
        <br>
        <input type="text" name="login">
        <br>
        <label for="password" class="form-label">Password:</label>
        <br>
        <input type="password" name="mdp">
        <br><br>
        <input type="submit" name="envoi">
    </form>
</body>
</html>