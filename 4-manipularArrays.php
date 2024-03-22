<?php

$edades = [18, 22, 40, 34];

// Count: Nos sirve para contar cuantos elementos hay en un array.
// echo count($edades);


// array_push: Nos permite añadir un nuevo elemento al final del array
/* array_push($edades, 13); // primero pongo la variable y despues el elemento que quiero agregar
var_dump($edades); */


// is_array: Nos sirve para definir o ver si una variable es realmente un array.
# $esto_no_es_un_array = " ";
# var_dump(is_array($esto_no_es_un_array)); // ME SALDRA FALSE, PORQUE NO ES UN ARRAY
# var_dump(is_array($edades)); // ME SALDRA TRUE PORQUE SI ES UN ARRAY


// Explode: Transforma un string o int en un array.
/* $lista_frutas = "frutilla, cereza, manzana";
$lista_frutas_array = explode(",", $lista_frutas); //dentro de los parentesis, en el primer espacio tengo que poner con que signo voy a separar los elementos, en este caso puse una ,
var_dump($lista_frutas_array);
var_dump(is_array($lista_frutas_array)); */


// Implode: Es lo opuesto a Explode
/* $lista_frutas_array  = ["frutilla", "cereza", "manzana"];
$lista_frutas = implode(" - ", $lista_frutas_array);
var_dump($lista_frutas); */

echo "\n";