<?php

     for ($i=2; $i<=1000; $i++){
           
        if($i===2 || $i===3 || $i===5 || $i===7){
            echo"$i<br>";
        }
        elseif($i%2 != 0 && $i%3 != 0 && $i%5 !=0 && $i%7!=0){
            echo"$i<br>";
        }

        }

?>