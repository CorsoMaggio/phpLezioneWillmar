<?php

for ($x = 0; $x <= 30; $x++) {
    $modulo = 0;
    $modulo3 = $x % 3;
    $modulo5 = $x % 5;
    if($x % 3 == 0){
          if($x % 5 == 0){
            echo "Francesco, ";
         }
         else{
            echo "PHP, ";
         }
    }elseif($x % 5 == 0){
            echo "JAVASCRIPT ,";
         }else{
            echo $x.", ";
         }

}
?>