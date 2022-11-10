<?php
//Arreglo
$cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24
);
foreach ($cafes as $sub => $cafe)
    echo "El café $sub cuesta $$cafe USD \n";

