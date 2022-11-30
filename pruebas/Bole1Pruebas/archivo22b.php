<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>

        <?php

        //Funciones normales

            $num1 = 25;
            $num2 = 2;

            $rdo = $num1 + $num2;
            echo "<li>Suma: ". $rdo . "</li>\n";

            $num1 -= $num2;
            echo "<li>Resta: ". $num1 . "</li>\n";

            $rdo = $num1 / $num2;
            echo "<li>División: ". $rdo . "</li>\n";

            $rdo = $num1 % $num2;
            echo "<li>Modulo: ". $rdo . "</li>\n";

            $rdo = $num1 * $num2;
            echo "<li>Multiplicación: ". $rdo . "</li></br>\n";

        //Funciones matemáticas en funciones

            $num1 = -55;
            echo "<li>Absoluto: ". abs($num1) . "</li>\n";

            echo "<li>Numero: ". $num1 . "</li>\n";

            echo "<li>Absoluto del máximo: ". abs(max(-55, -126, -784, -45000 )) . "</li>\n";

            echo "<li>maximo absoluto: ". max(abs(-55), abs(-126), abs(-745), abs(-84751) ) . "</li>\n";

        ?>  
    </ul>
</body>
</html>

