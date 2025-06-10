<?php
echo "Inserisci il nome dell prodotto: ";
$richiesta = trim(fgets(STDIN));

switch ($richiesta) {
    case "pizza":
        echo "Hai ordinato una Pizza con un costo di 6 Euro.";
        break;
    case "birra":
        echo "Hai ordinato una Birra con un costo di 3 Euro.";
        break;
    case "panino":
        echo "Hai ordinato un Panino con un costo di 8 Euro.";
        break;
    case "insalata":
        echo "Hai ordinato un Insalata ma al momento non è disponibile.";
        break;
    case "dessert":
        echo "Hai ordinato un Dessert con un costo di 3 Euro.";
        break;
    default:
        echo "L'ordine non è presente nel menu.";
        break;
}
?>