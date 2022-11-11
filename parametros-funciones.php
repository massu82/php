<?php

function legend($platzi_rank)
{
    if ($platzi_rank >= 20000) {
        echo "Eres un estudiante Legend! \n";
    } else {
        echo "Lo sentimos, aun no alcanzas el nivel legend \n";
    }
}

;


do {
    $platzi_rank_user = (int)readline("Dinos, cual es tu Platzi Rank?");
    legend($platzi_rank_user);
} while (true);