<form method="get">
    Entrez un nombre <br>
    <input type="text" name="nombre">
    <input type="submit" value="envoyer">
</form>

<?php

if (isset($_GET [nombre])){

if ($_GET[nombre] % 2 == 0){
    echo $_GET[nombre] . " est pair";
}
else {
    echo $_GET[nombre] . " est impair";
}
}
?>