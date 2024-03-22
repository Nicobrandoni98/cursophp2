<?php

// RETO N°1: HACER UN ARRAY EN DONDE TENGA 3 GATOS, CADA UNO TIENE QUE TENER NOMBRE, OCUPACION, COLOR Y COMIDAS (TAMBIEN DIVIDIR LAS COMIDAS EN 2, COMIDA QUE LES GUSTA Y COMIDA QUE NO LES GUSTA)

$gatos = [
    "gato1" => [
        "nombre" => "pepe",
        "ocupacion" => "cuidador",
        "comidas" => ["proplan", "profeo"],
    ],
    "gato2" => [
        "nombre" => "dana",
        "ocupacion" => "paseador",
        "comidas" => ["proplan", "profeo"],
    ],
    "gato3" => [
        "nombre" => "julio",
        "ocupacion" => "rascador",
        "comidas" => ["proplan", "profeo"],
    ],
];

echo "Tengo un gato que se llama: {$gatos["gato1"]["nombre"]}, trabaja de {$gatos["gato1"]["ocupacion"]}, y la comida que le gusta es: {$gatos["gato1"]["comidas"][0]}\n";
echo "Tengo un gato que se llama: {$gatos["gato2"]["nombre"]}, trabaja de {$gatos["gato2"]["ocupacion"]}, y la comida que no le gusta es: {$gatos["gato2"]["comidas"][1]}\n";
echo "Tengo un gato que se llama: {$gatos["gato3"]["nombre"]}, trabaja de {$gatos["gato3"]["ocupacion"]}, y la comida que le gusta es: {$gatos["gato3"]["comidas"][0]} y la que no le gusta es: {$gatos["gato3"]["comidas"][1]}\n";



echo "\n";