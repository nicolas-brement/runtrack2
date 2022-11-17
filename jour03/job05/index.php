<?php

#Variable contenant la string
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$voyelles = 0;
$consonnes = 0; 

#Tableaux des consonnes et voyelles
$array_consonnes = ["b", "c", "d", "f", "g", "h", "j","k", "l", "m", "n", "p","q", "r", "s", "t", "v", "w", "x", "z"];
$array_voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I","O", "U", "Y"];


#Première boucle for qui parcourt la string et la deuxième qui parcourt le tableau des voyelles + la condition vérifiant la présence de l'index i dans le tableau voyelles
for($i = 0; isset($str[$i]); $i++){
    for ($j = 0; isset($array_voyelles[$j]); $j++){
        if($str[$i] == $array_voyelles[$j]){ 
            $voyelles++;
        }
    }

    for($h = 0; isset($array_consonnes[$h]); $h++){
        if($str[$i] == $array_consonnes[$h]){
            $consonnes++;
        }
     }
    
}

$dic = [ "voyelles" => $voyelles,
        "consonnes" => $consonnes]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
        <tr>
            <td><b>Voyelles</b></td>
            <td><b>Consonnes</b></td>
        </tr>

        <tr>
            <td><?php echo $dic["voyelles"] ?></td>
            <td><?php echo $dic["consonnes"] ?></td>
        </tr>
    </table>
</body>
</html>