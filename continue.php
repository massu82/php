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
    if ($sub == "Recalentado")
        continue;
    echo "El café $sub es muy rico! \n";

}
