<?php
// Obține ora curentă
$hour = date("H");

// Verifică ora și afișează mesajul corespunzător
if ($hour < 12) {
    echo "Bună dimineața!";
} elseif ($hour < 18) {
    echo "Bună ziua!";
} else {
    echo "Bună seara!";
}
?>
