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






function contaVocali(string $stringa): int {
    $vocali = ["a", "e", "i", "o", "u"];
    $count = 0;
    $stringa = strtolower($stringa); // Converti a minuscolo per non distinguere maiuscole
    
    for ($i = 0; $i < strlen($stringa); $i++) {
        if (in_array($stringa[$i], $vocali)) {
            $count++;
        }
    }
    return $count;
}

// Esempio di utilizzo:
echo "Inserisci una stringa: ";
$testo = trim(fgets(STDIN));
$numeroVocali = contaVocali($testo);
echo "La stringa '" . $testo . "' contiene " . $numeroVocali . " vocali.";
?>