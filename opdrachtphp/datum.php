<?php


echo "Het is vandaag: " . date("l d F Y");
echo "<br><br>";


echo "Vandaag is het de " . (date("z") + 1) . "e van het jaar.";
echo "<br><br>";


echo date("l") . " is de " . date("N") . "e dag van de week.";
echo "<br><br>";


echo "De maand " . date("F") . " heeft in totaal " . date("t") . " dagen.";
echo "<br><br>";


if (date("L") == 1) {
    echo "Het jaar " . date("Y") . " is een schrikkeljaar.";
} else {
    echo "Het jaar " . date("Y") . " is geen schrikkeljaar.";
}

?>