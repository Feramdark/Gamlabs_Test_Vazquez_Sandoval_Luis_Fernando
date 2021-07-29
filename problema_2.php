<?php


$arreglo = array();
$apuntador = 1;
$mayor = 0;

for ($i = 2; $i <= 104743 ; $i++) { 
    if (numero_primo($i)) {
        //$mayor = $i;
        //echo "El numero ". $i . " es primo <br>";
        $arreglo[$apuntador] = $i;
        $apuntador++;
    }
}
//Recorre el arreglo e indica la posicion en la cual se encuentran los elementos

for ($n=1; $n <= count($arreglo) ; $n++) { 
    //echo "Pos: ".$n." Valor: ".$arreglo[$n]. "<br>";  -> descomentar para observar la lista
}

$numMayor = $arreglo[1];
$index = 0;
for ($i = 1; $i <= count($arreglo) ; $i++) { 
    if ($arreglo[$i] > $numMayor) {
       $numMayor = $arreglo[$i];
       $index = $i;

    }
}
echo "El número mayor es ".$numMayor ." su posicion es ". $index;


// conoce si tiene uno o mas divisores
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
