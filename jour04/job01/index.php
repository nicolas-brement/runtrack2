<form method="get">  
     Entrez votre nom  <br>  
    <input type="text" name="username">  
    <br>  Entrez votre prénom  <br>  
    <input type="text" name="firstname"> 
    <br>  Entrez votre mail  <br>  
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
