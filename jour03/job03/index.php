<?php

#Le tableau comportant ma strg et mes voyelles
$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelles = ["a", "e", "i", "I", "o", "u", "y"]; 

#Boucle for permettant de parcourir la string
#Boucle for permettant de parcourir le tableau
#Si  "$i" se trouve dans le tableau des voyelles alors il devra s'afficher
for($i = 0; isset($str[$i]); $i++){
    for($j = 0; isset($voyelles[$j]); $j++)
        if($str[$i] == $voyelles[$j]){
            echo $str[$i];
    }
}