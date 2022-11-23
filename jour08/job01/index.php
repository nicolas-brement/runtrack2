<?php
session_start();

    if(isset($_POST['reset']))
        {$_SESSION['nbvisites'] =0;}

    if(isset($_SESSION['nbvisites']))
        {$_SESSION['nbvisites'] ++;}

    else
        {$_SESSION['nbvisites'] = 1;}
        echo "Vous avez visité cette page " ."  ".$_SESSION['nbvisites'] ." fois";
?>

<form method="post">
<input type="submit" name="reset" value="Reset">
</form>




