<?php
$resultTotal = 0;
for ($x = 0; $x <= 10; $x++) {
  if($x % 2 == 0){
        $resultTotal= $resultTotal + $x;
    }
}
echo "il resultato è:". $resultTotal;
?>