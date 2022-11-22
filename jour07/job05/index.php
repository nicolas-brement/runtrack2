<?php

function occurences($str, $char)
{
    $i = 0;
    $a = 0;
    while (isset($str[$i]))
    {
      if ($char == $str[$i])
        {
          $a++;
        }
          $i++;
    }
      return $a;
}

echo occurences('LaPlateforme','a');

?>


