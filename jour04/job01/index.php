<form method="get">  
     Entrez votre Nom  <br>  
    <input type="text" name="username">  
    <br>  Entrez votre Prénom  <br>  
    <input type="text" name="firstname"> 
    <br>  Entrez votre Email  <br>  
    <input type = "email" name = "email"> 
    <br>
    <br>
    <input type="submit" value="envoyer">
  </form>  

<?php

$count = 0;
foreach ($_GET as $key => $value){ 
     $count++;


}
echo $count;
?>
