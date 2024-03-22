<?php


$asientos_disponibles = 1;
$amigo_del_dueño = true;

if ($asientos_disponibles >= 1) {
    echo "Puede comprar la entrada y ver la pelicula.";
} 
else if ($amigo_del_dueño === true)
    echo "bueno dale pibe, entra a ver la peli";
else 
    echo "Lo siento, no puede ver la pelicula."; // si tengo una sola linea de codigo en el if o en else if o el else, no hace falta poner las llaves {}.


echo "\n";  