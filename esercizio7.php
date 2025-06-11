<?php
$arrays = [
  [
    'name' => 'Marco',
    'gender' => 'M',
  ],
  [
    'name' => 'Vanessa',
    'gender' => 'F',
  ],
  [
    'name' => 'Jack',
    'gender' => 'M',
  ],
  [
    'name' => 'Mari*',
    'gender' => '',
  ],
];

foreach ($arrays as $x => $y) {
     if($y['gender'] == 'M'){
            echo "Buongiorno Sig. ".$y['name']." \n";
       }elseif($y['gender'] == 'F'){
            echo "Buongiorno Sig.ra ".$y['name']." \n";
       }elseif( $y['gender']== ''){
            echo $y['name']." ha preferito non specificare"." \n";
       }
}
/*
for ($row = 0; $row < 4; $row++) {
   for ($col = 0; $col < 2; $col++) {
      if($arrays[$row]['gender'] == 'M'){
         echo "Buongiorno Sig. ".$arrays[$row]['name']." \n";
       }elseif($arrays[$row]['gender'] == 'F'){
         echo "Buongiorno Sig.ra ".$arrays[$row]['name']." \n";
       }elseif($arrays[$row]['gender'] == ''){
         echo $arrays[$row]['name']." ha preferito non specificare"." \n";
       }
    }
}*/
?>