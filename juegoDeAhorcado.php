<?php  

function clear(){
    if (PHP_OS === "WINNT") {
        popen("cls", "w");
    } else {
        system("clear");
    }
}


$palabras_posibles = ["Bebida", "Ventilador", "Cartuchera", "Cataratas", "Botella", "Rinoceronte", "Terremoto", "Ventilador", "Milanesa"];

define ("MAX_ATTEMPS", 6);

echo "😺 Juego del ahorcado \n\n";

// Inicializamos el juego.

$elige_palabra = $palabras_posibles[rand(0, 8)]; // elige de forma aleatoria entre 0 y 8
$elige_palabra = strtolower($elige_palabra); // combierte todas las letras en minusculas
$tamaño_palabra = strlen($elige_palabra); // me dice el tamaño de la palabra
$espacios_disponibles = str_pad("", $tamaño_palabra, "_");
$intentos = 0;



do {

    echo "Palabra de $tamaño_palabra letras \n\n";
    echo $espacios_disponibles . "\n\n";

    // Pedimos al usuario que escriba.

    $letras_jugador = readline("Escribe una letra: ");
    $letras_jugador = strtolower($letras_jugador);



    if (str_contains($elige_palabra, $letras_jugador)){ // la funcion str_contains() me dice si la letra existe en algun string, dentro tengo que poner la palabra que se eligio, y luego la letra que elige el jugador.

        // Verificamos todas las ocurrencias de esta letra para reemplazarla
        $offset = 0;
        while(
            ($posicion_letra = strpos($elige_palabra, $letras_jugador, $offset)) !== false
        ) {
            
            $espacios_disponibles[$posicion_letra] = $letras_jugador;
            $offset = $posicion_letra + 1;

        }

    } 
    else {
        clear();
        $intentos++;
        echo "Letra incorrecta ❌. Te quedan " . (MAX_ATTEMPS - $intentos) . " intentos.";
        sleep(1.3);
    }

    clear();

} while ($intentos < MAX_ATTEMPS && $espacios_disponibles !== $elige_palabra);

clear();

if ($intentos < MAX_ATTEMPS)
    echo "Felicidads, adivinaste la palabar ! ";
else echo "Lo siento, perdiste.";

echo "La palabra es: $elige_palabra \n\n";
echo "Tu descubriste $espacios_disponibles\n";


echo "\n";