<?php

$str = "Dans l'espace, personne ne vous entend crier"; 

#Cette variable servira à compter le nombre de caractère
$count = 0; 

#Boucle permettant de parcourir la string
#On affiche en suite les caractères et on complète la variable count
for($i = 0; isset($str[$i]); $i++){ 
    echo "$str[$i]";
    $count++;

}
    echo "<br>Cette phrase comporte $count caractères.";