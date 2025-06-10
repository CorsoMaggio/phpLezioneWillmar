<?php
const BUDGET = 1000;

echo "Inserisci una cifra in euro: ";
$stdin = fopen('php://stdin', 'r');

$cifra=(float)trim(fgets($stdin));


if ($cifra > BUDGET) {
    echo "La cifra non puo esere maggiore a " . BUDGET . " EURO.\n";
} else {
    $valore_calcolato = round($cifra / 3, 2);
    echo "Paga in 3 rate da: $valore_calcolato EURO\n";
}
?>