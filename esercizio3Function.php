<?php
function checkPair($x) {
    $varCheck = false;
    if($x % 2 == 0){
        echo $x." - ";
    }
    return $varCheck;
}

function checkDispare($x) {
    $varCheck = false;
    if($x % 2 <> 0){
        echo $x." - ";
    }
    return $varCheck;
}





echo "Inserisci un numero: ";
$number = trim(fgets(STDIN));
echo "Numeri dispare: ";
for ($x = 1; $x <= $number; $x++) {
    checkDispare($x);
}
echo "\nNumeri dispare: ";
for ($x = 1; $x <= $number; $x++) {
    checkPair($x);
}


?>