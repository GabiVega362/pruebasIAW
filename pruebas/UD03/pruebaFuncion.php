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
            echo "<h1>Empresa Jesusito</h1>\n";
            echo "<h3>A su servicio desde 1743</h3>\n";
        }
        echo "<h1>Página principal</h1>\n";
        imprimirCabecera();

        include 'operacionesMates.php';
        $ope1 = 3;
        $ope2 = 7;
        $ope = '*';

        $total = opeMates($ope1, $ope2);
        echo "<h1>Total de $ope1 , $ope2 = $total</h1>\n";
/*
        suma($ope1, $ope2);
        resta($ope1, $ope2);
        producto($ope1, $ope2);
        division($ope1, $ope2);
*/

    ?>
</body>
</html>