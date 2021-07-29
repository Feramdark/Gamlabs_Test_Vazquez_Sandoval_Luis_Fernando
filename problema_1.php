<?php

//Dada la instruccion se requiere conocer el producto de dos numeros de tres cifras
//Por lo que realizare dos ciclos for 

$mayor = 0;
$arreglo = [];
$pares=[];
$cont = 0;

for ($i=100; $i <= 999  ; $i++) { 

    for ($j=100; $j <= 999 ; $j++) { 
        $res = $i * $j;

        $reversa = strrev($res);
        if(strcmp($res,$reversa)==0 && $res > $mayor ) {

            $mayor = $res;
            
            $arreglo[$cont] = $mayor;
            $pares[$cont] = "$j e $i";
            $cont++;

            //echo "Op: ". $res . " A = $i X B = $j PAL: " .$mayor. "<br>";
        }
    }
}
//comprobar el numero mayor
$numMayor;
$parejas;
$numMayor = $arreglo[0];

for ($i=0; $i < count($arreglo) ; $i++) { 

    if( $arreglo[$i] > $numMayor){
        $numMayor = $arreglo[$i]; 
        $parejas = $pares[$i];
    }
}
echo "<h1>". "Los pares $parejas dan como resultado el palíndromo: ".$numMayor."</h1>";

