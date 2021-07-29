<?php

/* El palíndromo más grande formado por el producto de dos números
de dos dígitos es 9009, ya que se obtiene multiplicando 91 x 99.

Encuentre un el palíndromo más grande formado por números de 3 dígitos.
*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Número palindrómico</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <?php
                $mayor = 0;
                $arreglo = [];
                $pares = [];
                $cont = 0;
                /*Como son numeros de tres cifras inicie dos ciclos desde 100 hasta 999*/
                for ($i = 100; $i <= 999; $i++) {

                    for ($j = 100; $j <= 999; $j++) {
                        $res = $i * $j;

                        $reversa = strrev($res); //PHP trae funciones para invertir cadenas, en este caso numeros
                        if (strcmp($res, $reversa) == 0 && $res > $mayor) { //Así mismo, existe una funcion de comparacion que devuelve '0', en caso de ser identicas.
                            //Como devuelve muchos valores y lo que me interesa son los mayores, redusco mi rango de busqueda.
                            $mayor = $res; 

                            $arreglo[$cont] = $mayor; //arreglo de numeros.
                            $pares[$cont] = "$j y $i"; // Arreglo de factores.
                            $cont++;

                            echo "<table border=1>";

                            echo "<tr>";
                            echo "<th>Palíndromo<th>";
                            echo "<th> Factores<th>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td>" . $res . "<td>";
                            echo "<td> A = $i X B = $j <td>";
                            echo "</tr>";
                            //echo "Op: ". $res . " A = $i X B = $j PAL: " .$mayor. "<br>";
                            echo "</table>";
                        }
                    }
                }
                ?>
            </div>
            <div class="col-md-8">
                <?php

                $numMayor;
                $parejas;
                $numMayor = $arreglo[0];
                
                //se hace la busqueda a el mayor numero de todo el arreglo y con este sus factores.
                for ($i = 0; $i < count($arreglo); $i++) {

                    if ($arreglo[$i] > $numMayor) {
                        $numMayor = $arreglo[$i];
                        $parejas = $pares[$i];
                    }
                }
                echo "<h1>" . "Los factores $parejas dan como resultado el palíndromo mayor: " . $numMayor . "</h1>";
                ?>
            </div>
        </div>
    </div>
</body>

</html>