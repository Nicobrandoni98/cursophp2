<?php

// $edades = [20, 18, 40];
// $edades = array (20, 18, 40); LAS DOS FORMAS DE CREAR UN ARRAY


// echo "Una de las edades que esta dentro es " . $edades[2];



// ARRAYS ASOCIATIVOS

/* $edades = [
    "Nicolas" => 26,
    "Juan" => 30,
    "Papa" => 62,
    "Mama" => 58,
];

echo "La edad de Juan es " . $edades["Juan"]; */

$cafes = [
    "capuccino" => 50,
    "latte" => 40,
    "americano" => 60,
];
// echo "El valor del cafe latte es de {$cafes["latte"]}"; // PARA PONER EL ARRAY DENTRO DE LAS DOS COMILLAS TENGO QUE ENCERRAR EL ARRAY ENTRE LLAVES "{}"

$personas = [
    "Nicolas" => [
        "edad" => 26,
        "apellido" => "Brandoni",
    ],
    "Juan" => [
        "edad" => 30,
        "apellido" => "Brandoni",
    ],
];


echo "La informacion de Nicolas es: \n Edad: " . $personas["Nicolas"]["edad"] . "\n Apellido: " . $personas["Nicolas"]["apellido"] . "\n" ;

echo "La informacion de Juan es:\n Edad: {$personas["Juan"]["edad"]}\n Apellido: {$personas["Juan"]["apellido"]}\n";


echo "\n";