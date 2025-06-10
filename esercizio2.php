<?php
// ottenere l'età
// La console deve dire che hai accesso alla piattaforma se hai più di 4 anni

echo "Inserisci il tuo anno di nascità: ";
$anoNascita = (int) trim(fgets(STDIN));
echo "Inserisci l'anno attuale: ";
$anoOggi = (int) trim(fgets(STDIN));

$anniTotale = $anoOggi - $anoNascita;

if ($anoNascita > $anoOggi) {
    echo 'data sbagliata';
} else if ($anniTotale >= 4) {
    echo 'Puoi accedere alla piattaforma perchè hai: ' . $anniTotale . ' anni.';
} else {
    echo "Non puoi accedere alla piattaforma, devi avere almeno 4 anni";
}


?>