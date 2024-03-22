<?php

/* $usernames = ["Nicolas", "Juan", "Hugo", "Marisa"];

do {
    
    $username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");

} while (in_array($username, $usernames)); // in_array nos permite saber si un username esta o no esta en el array usernames (en este caso) (primero se pone lo que buscamos y luego en donde lo buscamos) */




// HACER EL MISMO EJEMPLO SOLO CON WHILE
$usernames = ["Nicolas", "Juan", "Hugo", "Marisa"];

$username = readline("Por favor ingresa un nombre de usuario: "); 

while (in_array($username, $usernames)) {
    $username = readline("Por favor, ingresa otro nombre de usuario: ");
}
array_push($usernames, $username);

print_r($usernames);


echo "\n";