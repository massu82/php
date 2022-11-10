<?php
$cantidad_donada = readline("Ingresa la cantidad de donaciones acumulada que tienes: ");
$moneda = number_format($cantidad_donada, 2);

if ($cantidad_donada < 100)
    echo "Recuerda que debes reunir al menos 100 dolares para poder cobrar";
elseif ($cantidad_donada >= 100)
    echo "Perfecto cuentas con $" . $moneda . " dolares, ahora puedes retirarlos";
else
    echo "Dato incorrecto";



