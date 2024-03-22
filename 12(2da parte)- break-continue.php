<?php 

$tienda_de_cafes = [
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24,
];

// CON BREAK

/* foreach ($tienda_de_cafes as $cafe => $price) {

    echo "Actualmente encontré al café $cafe \n";

    if ($cafe === "Latte") {
        echo "¡Encontramos a Latte!";
        break;
    }
} */


// CON CONTINUE

foreach ($tienda_de_cafes as $cafe => $price) {

    if ($cafe === "Recalentado") {
        continue;
    }

    echo "El café $cafe es muy rico!\n";

}
    





echo "\n";