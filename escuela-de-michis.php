<?php
$escuela = array(
    array(
        "nombre" => "Andres",
        "ocupacion" => "Arquitecto",
        "color" => "Azul",
        "comidas" => array(
            "Favoritas" => "Lasaña, Atun",
            "noFavoritas" => "Fresas, Cacahuates"
        )
    ),
    array(
        "nombre" => "Hugo",
        "ocupacion" => "Ingeniero",
        "color" => "Rojo",
        "comidas" => array(
            "Favoritas" => "Enchiladas, Pizza",
            "noFavoritas" => "Higado, Pollo"
        )
    ),
    array(
        "nombre" => "Hilda",
        "ocupacion" => "Comunicación",
        "color" => "Rosa",
        "comidas" => array(
            "Favoritas" => "Elotes, Tamales",
            "noFavoritas" => "Chiles rellenos, Moronga"
        )
    )
);
$carnales = $escuela[0];
//echo "La comida favorita de Andres es " . $carnales['comidas']['Favoritas'];
$hugo = $escuela[1];
echo "\n";
echo "El color favorito de Hugo es " . $hugo["color"];


