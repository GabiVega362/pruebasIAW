<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba función</title>
</head>
<body>
    <?php
        function imprimirCabecera() {
            echo "<h1>Ejercicio 31 de funciones</h1>\n";
        }
        echo "<h1>Página principal</h1>\n";
        imprimirCabecera();

        include 'ej31Funciones.php';
        $ope1 = 3;
        $ope2 = 7;
        $ope = '*';

        //SUMA
        echo "<h3>Funcion Suma</h3>\n";

        $total = opSuma($ope1, $ope2);

        //PRECIO FINAL
        echo "<h3>Funcion precio final</h3>\n";
        $Precio = 40;
        $precioT = prezoFinal($Precio);
        echo "Precio final: $precioT";

        //COCIENTE
        echo "<h3>Funcion cociente</h3>\n";
        $num1 = 40;
        $num2 = 21;

        $rdo = cociente($num1, $num2);
        echo "<p> El division da " . $rdo[0] . " y el cociente " . $rdo[1] . "</p>\n";

        //TRANSFORMAR HORA
        echo "<h3>Funcion transformar hora</h3>\n";
        $hora = 24;
        $rdo = transHora($hora);
        echo"<p> La hora es $hora en minutos $rdo[0] en segundos $rdo[1] </p>\n";

        //AREA
        echo "<h3>Funcion area</h3>\n";
        $h = 40;
        $r = 21;

        $area = area($h, $r);
        echo "<p>Su area es " .  round($area, 2) . "</p>\n";

        //VOLUMEN
        echo "<h3>Funcion volumen</h3>\n";
        $h = 40;
        $r = 21;

        $volu = volu($h, $r);
        echo "<p>Su volumen es " . round($volu, 2) . "</p>\n";




    ?>
</body>
</html>