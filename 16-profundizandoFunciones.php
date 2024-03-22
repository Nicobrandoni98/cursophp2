<?php
/* 
function suma($a = 2, $b = 2) {
    echo "La suma de $a + $b es: " . $a + $b . "\n";
}
 */
// suma(20);

/* 
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

// $resultado = [...$array1, ...$array2];
                                        // SON DOS FORMAS DISTINTAS DE COMBINAR DOS ARRAYS
// $resultado = array_merge($array1, $array2); 

var_dump ($resultado);
print_r ($resultado);
 */

/* 
$numeros = [1, 2];
$numeros2 = [50, 20];
$numeros3 = [10000, 2];

function suma($a, $b) {
    echo "La suma de $a + $b es: " . $a + $b . "\n";
}

suma(...$numeros3); // aca vemos que puedo pasarle los parametros de un array a la funcion con el metodo untaqui
 */




function suma_infinita(...$parametros) {
    
    $suma = 0;

    foreach ($parametros as $numero) {
        $suma += $numero;
    }

    echo "La sumatoria es: $suma \n";
}

suma_infinita(1, 2);
suma_infinita(1, 2, 3);
suma_infinita(1, 2, 40, 23, 200, 10); 






echo "\n";