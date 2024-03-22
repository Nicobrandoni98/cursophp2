<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');

function obtener_hora(){
    return date("H:i A");
}

echo "Hola, ¿Me podes decir la hora? \n";
echo "Claro, son las " . obtener_hora() . "\n";

echo "\n";