<?php

$var="puntos4857";

echo "<p>Tipo de dato " . gettype($var) . "</p>\n";

if (settype($var, 'int')){
    echo"Se cambio el tipo";

}

echo "<p>Tipo de dato " . gettype($var) . "</p>\n";
    echo "Valor despues del cambio " . $var;

unset($var);
    echo "<p>Valor despues del unset </p>";

    if (empty($var)){
        echo "Tienes la variable vacia notas";
    }

?>