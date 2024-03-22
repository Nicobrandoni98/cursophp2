<?php

function es_estudiante_legend($platzi_rank) {
    
    if ($platzi_rank >= 20000) 
        echo "Eres un estudiante Legend \n";
         else 
        echo "Lo siento aun no alcanzas el nivel legend \n";
}

do {
    es_estudiante_legend((int)readline ("Cuantos puntos tienes en platzi ? "));
} while (true); // control + C para cancelar el bucle.



echo "\n";