<?php
function multiple3($x) {
  if($x % 3 == 0){
        echo "PHP, ";
    }
}
function multiple5($x) {
    if($x % 5 == 0){
        echo "JAVASCRIPT, ";
    }
}
function multiple35($x) {
    $varCheck = false;
    if($x % 3 == 0){
          if($x % 5 == 0){
            echo "Bari, ";
            $varCheck = true;
         }
    }
    return  $varCheck;
}
for ($number = 1; $number <= 30; $number++) {
    echo $number." ";
    if(multiple35($number) == false){
        multiple3($number);
        multiple5($number);
    }
}
?>