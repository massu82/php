<?php
$edades = array(
    'carlos' => 20,
    'Mr.Michi' => 18,
    'Juan' => 40
);

echo "La edad de Carlos es de " . $edades['carlos'] . ", Es muy joven.";
echo "\n";
$cafes = array(
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70
);

echo "El precio del Capuccino es de {$cafes['Capuccino']}";

$personas = array(
    "Andrés" => array(
        "edad" => 40,
        "apellido" => "Massuttier",
        "sexo" => "Masculino"
    ),
    "Antonio" => array(
        "edad" => 60,
        "apellido" => "Cruz",
        "sexo" => "Masculino"
    ),
    "Hilda" => array(
        "edad" => 41,
        "apellido" => "Masuttier",
        "sexo" => "Femenino"
    )
);
echo "\n";
echo "La información de Andrés es: Edad: " . $personas["Andrés"]["edad"] . ", Apellido: " . $personas["Andrés"]["apellido"];