<?php
for($i =0; $i <= 100; $i++ ) {

    if ($i <= 20){
        echo "<i>$i</i><br/>";
    }
    elseif ($i >= 25 && $i <= 41){
        echo "<u>$i</u><br/>";
    }
    elseif ($i >= 43 && $i <= 50){
        echo "<u>$i</u><br/>";
    }
    elseif ($i === 42){
        echo "LaPlateforme_ <br/>";
    }
    else {
        echo "$i <br>";
    }
}