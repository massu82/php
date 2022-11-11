<?php

function suma($a = 1, $b = 1)
{
    echo "La suma de $a + $b es: " . $a + $b . "\n";
}

//suma(56);

$arreglo1 = [1, 2, 3];
$arreglo2 = [4, 5, 6];

//Vamos a juntar dos arreglos

$resultado = [...$arreglo1, ...$arreglo2];

var_dump($resultado);
