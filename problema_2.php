<?php

$posicion = 10001;
$numPrims = [2];
$valor = 3;
$divisor = 2;

$found = false;


while (count($numPrims) < $posicion) {
    while ($divisor < $valor) {
        if ($valor%$divisor == 0) {
            $found = false;
            break;
        }
        else{
            $found = true;
            $divisor += 1;
        }
    }
    if ($found) {
        $found = false;
        array_push($numPrims,$valor);
    }
    $valor += 1;
    $divisor = 2;
    echo $numPrims[$posicion];
}


