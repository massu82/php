<?php
$usernames = ["Andres", "Hugo", "Hilda"];
do {
    //echo "Esto de ejecuta por lo memos una vez";
    $username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");
} while (in_array($username, $usernames));

//echo "\n";
