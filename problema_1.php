<?php

//Dada la instruccion se requiere conocer el producto de dos numeros de tres cifras
//Por lo que realizare dos ciclos for 

$mayor = 0;
for ($i=100; $i <= 999  ; $i++) { 

    for ($j=100; $j <= 999 ; $j++) { 
        $res = $i * $j;

        $reversa = strrev($res);
        if(strcmp($res,$reversa)==0 && $res > $mayor ) {

            
            $mayor = $res;
            echo "Op: ". $res . " A = $i X B = $j PAL: " .$mayor. "<br>";
        }
    }
}
