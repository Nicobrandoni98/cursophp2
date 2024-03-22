<?php

// RETO-2: PUEDO RETIRAR MIS DONACIONES DE TWITCH? PARA HACERLO TENGO QUE TENER UN MINIMO DE 100 DOLARES. 
// TENGO QUE PEDIRLE AL STREAMER QUE ME DIGA CUANTO DINERO TIENE O LE HAN DONADO, Y SI TIENE 100 DOLARES O MAS PUEDE RETIRARLO, SINO NO.


$dinero_disponible = readline ("Decime STRIMER... Cuantos dolares tenes ahora? ");

if ($dinero_disponible >= 100)
    echo "Bueno, podes retirar los dolares... Ojo con AFIP.";
else echo "Nao nao capo, no podes tocar un billete.";




echo "\n";