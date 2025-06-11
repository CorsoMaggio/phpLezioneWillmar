<?php
function controlAge($x) {
    $varCheck = false;
    if($x < 18){
        return "non può votare";
    }else{
        return "può votare";
    }   
}



$persons = [
  [
    'name' => 'Marco',
    'age' => 18,
  ],
  [
    'name' => 'Vanessa',
    'age' => 12,
  ],
  [
    'name' => 'Jack',
    'age' => 34,
  ],
  [
    'name' => 'Maria',
    'age' => 55,
  ],
];
foreach ($persons as $x => $y) {
    echo $y['name']." ".controlAge($y['age'])."\n";
}
?>