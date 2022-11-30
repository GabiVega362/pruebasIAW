<?php
$suma = 0;
for ($i = 0; $i < 10; $i++){
    if ($i == 7){
        break;
    } elseif ($i == 6){
        continue;
    }
    $suma += $i;
}

    echo "<p>Valor: $suma </p>\n";
?>