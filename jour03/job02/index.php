<?php
#variable str contenant le string
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

#boucle qui va parcourir le string, fonction isset qui va vérifier la présence du caractère dans le string
#incrémentation, si le $i est pair alors on affiche $i
for($i = 0; isset($str[$i]); $i++) {
    if($i % 2 == 0){
        echo $str[$i];
    }
}