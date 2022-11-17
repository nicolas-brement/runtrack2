<form method="post">
    Entrez votre nom <br>
    <input type="text" name="username">
    <br> Entrez votre prénom <br>
    <input type="text" name="firsrname">
    <br> Entrez votre email <br>
    <input type="text" name="email">
    <br>
    <br>
    <input type="submit" value="envoyer">
</form>

<?php

$count = 0;
foreach ($_POST as $key => $value) {
    $count++;
}


?>
<p><?php echo $count?></p>