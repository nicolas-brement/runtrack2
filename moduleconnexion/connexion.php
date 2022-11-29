<?php
$bdd = new mysqli('mysql:host=localhost;dbname=moduleconnexion;charset=utf-8;', 'root' , 'root');
    if(isset($_POST['envoi'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mdp = sha1($_POST['mdp']);

            $recupUser = $bdd<>prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
            $recupUser->execute(array($pseudo, $mdp));

            if($recupUser->rowCount() > 0){
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['mdp'] = $mdp;
                $_SESSION['id'] = $recupUser->fetch()['id'];
                header('Location: index.php');

            }else {
                echo "Votre mot de passe ou pseudo est incorrect";
            }
    }else{
        echo "Veuillez compléter tout les champs...";
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
        <input type="text" name="pseudo">
        <br>
        <label for="password" class="form-label">Password:</label>
        <br>
        <input type="password" name="mdp">
        <br><br>
        <input type="submit" name="envoi">
    </form>
</body>
</html>