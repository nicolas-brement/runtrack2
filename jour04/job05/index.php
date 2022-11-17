<form method="post">
    Entrez votre nom d'user <br>
    <input type="text" name="username">
    <br> Entrez votre mot de passe <br>
    <input type="text" name="password">
    <input type="submit" value="envoyer">
</form>

<?php

if ($_POST[username] == "John" && $_POST[password] == "Rambo"){
    $war = "C'est pas ma guerre";
    echo $war;
}
elseif ($_POST[username] == "" && $_post[password] == ""){
    $nothing = "";
    echo $nothing;
}
else {
        $nightmare = "Votre pire cauchemar";
    echo $nightmare;
    }

?>