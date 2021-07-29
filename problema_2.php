<?php

$arreglo = array();
$mayor = 0;

for ($i = 2; $i <= 104743 ; $i++) { 
    if (numero_primo($i) && $i>$mayor) {
        //$mayor = $i;
        //echo "El numero ". $mayor . " es primo <br>";
        array_push($arreglo,$i);
    }
}


//print_r($arreglo);
for ($n=0; $n < count($arreglo) ; $n++) { 
    echo "Posicion: ".$arreglo[$n]. "<br>";
}





function numero_primo($numero){
    $cont = 0;

    for ($j=2; $j <= $numero ; $j++) { 
        if ($numero % $j == 0) {
            if (++$cont>1) { //incrementa y luego regresa su valor
                return false;
            }
        }
    }
    return true;
}

