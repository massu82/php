<?php

$edades = [18, 22, 34];
$operacion = count($edades);

$resultado = $edades[2] / $operacion;

// count
echo count($edades);
echo "\n";
echo round($resultado, 2);
echo "\n";
// array_push
array_push($edades, 13, 15);

//var_dump($edades);

//is_array

$esto_no_es_un_arreglo = "";

//var_dump(is_array($edades));
echo "\n";

// explode
//$lista_de_frutas = "fresa,cereza,manzana";
//$lista_de_frutas_array = explode(",", $lista_de_frutas);
//var_dump($lista_de_frutas_array);

// Implode
$lista_de_frutas_array = ["fresa","cereza","manzana"];
$lista_de_frutas = implode(" php ", $lista_de_frutas_array);

var_dump($lista_de_frutas);



