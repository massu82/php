<?php
//Arreglo
$cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24
);
foreach ($cafes as $sub => $cafe) {
    echo "Actualmente encontré el café $sub \n";
    if ($sub == "Latte") {
        echo "¡Encontramos a Latte! \n";
        break;
    }

}
