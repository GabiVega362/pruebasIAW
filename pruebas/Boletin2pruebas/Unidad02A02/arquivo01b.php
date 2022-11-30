<?php
    $r = rand(1,10);
    echo "<p> Num: $r </p>\n";
    if (($r % 2) == 0) {
        echo "<p>Tocouche un numero par</p>\n";

    } else{
        echo "<p>Tocouche un numero impar </p>\n";

    }
    
    echo (($r % 2) == 0) ? "<p>Tocouche un numero par</p>\n": "<p>Tocouche un numero impar </p>\n"; #operador ternario
    echo "<p> Outras liñas</p>\n"     

?>