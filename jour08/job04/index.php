<?php

if(!isset($_COOKIE['myCookie'])){
    if(isset($_GET['prenom'])){
        setcookie('myCookie', $_GET['prenom'], time()+3000 );
        header("Location: index.php");
}   else{ 
        echo "<form method='get'>
        <label>
            <input type='text' name='prenom'>
        </label>
        <button type='submit' name='connexion'>connexion</button>
    </form>";

    }
}else{ 
    echo "<form method='get'>
            <button type='submit' name='deconnexion'>deconnexion</button>
        </form>";
    echo "Bonjour " . $_COOKIE['myCookie'];
    if(isset($_GET['deconnexion'])){ 
        setcookie('myCookie', $_GET['prenom'], time()-3000 );
        header("Location: index.php");
    }
}

if(isset($_GET['prenom'])) {
        $_COOKIE['myCookie'] = $_GET['prenom'];

    }

?>





