<?php

$count = 0;


if(isset($_POST["reset"])){
    setcookie("nbvisites",$count,time()+3600);
    header("Location: index.php");
    exit();
}

if(isset($_COOKIE["nbvisites"])){
    $count = $_COOKIE["nbvisites"] +1;
}

setcookie("nbvisites",$count,time()+3600);
echo "Vous avez visité cette page" . " " . $_COOKIE["nbvisites"] . " fois";
?>

<form method="post">
<input type="submit" name="reset" value="Renitialiser le compteur">
</form>