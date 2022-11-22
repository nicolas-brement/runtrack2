<?php

function calcule($a, $operation, $b)
{
    $resultat = 0;
    {
        if ($operation == '+') 
            $resultat = ($a + $b);

        elseif ($operation == '-')
            $resultat = ($a - $b);
        
        elseif ($operation == '*')
            $resultat = ($a * $b);

        elseif ($operation == '/')
            $resultat = ($a / $b);

        elseif ($operation == '%')
            $resultat == ($a % $b);
    }      

return $resultat;
}

echo calcule(13,'+',13) . "<br/>";
echo calcule(26,'-',13) . "<br/>";
echo calcule(6,'*',4) . "<br/>";
echo calcule(10,'/',2) . "<br/>";
echo calcule(2,'%',3) . "<br/>"; // la division euclidienne "%" ne semble pas être prise en compte

?>