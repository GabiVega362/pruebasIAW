<?php

$var1=1;
$var2="Hola";

    if(is_numeric($var1)){

        echo "<p>La variable \$var1 es numerica</p>\n";
    }else{

        echo "<p>La variable \$vum no es numerica</p>\n";

    }

    $type = gettype($var1);
    echo "Tipo de dato en \$var1: " . $type;

    if(is_numeric($var2)){

        echo "<p>La variable \$var2 es numerica</p>\n";
    }else{

        echo "<p>La variable \$var2 no es numerica</p>\n";

    }

    $type = gettype($var2);
    echo "Tipo de dato en \$car2: " . $type;
?>