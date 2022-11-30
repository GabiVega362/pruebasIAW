<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
//Suma
        $var1 = 450;
        $var2 = 560;

        echo "<p>Suma: " . ($var1 + $var2) . "</p>";

//Precio final
        $Precio = 10.99;
        $IVA = ($Precio * 21) / 100;
        $rdo = $Precio + $IVA;

        echo "<p>Precio sin IVA: ". $Precio . "</p>\n";
        echo "<p> IVA: ". $IVA . "</p>\n";
        echo "<p>Precio sin IVA: ". $rdo . "</p>\n";    

//Cociente
        $num1 = 25;
         $num2 = 2;

        $rdo = $num1 / $num2;
        echo "<li>Coheficiente: ". $rdo . "</li>\n";

        $rdo = $num1 % $num2;
        echo "<li>Resto: ". $rdo . "</li>\n";

//Hora

        $hora = 24;
        $min = $hora * 60;
        $seg = $min * 60;

        echo "<p> Horas: ". $hora . "</p>\n";
        echo "<p> Minutos: ". $min . "</p>\n";
        echo "<p> Segundos: ". $seg . "</p>\n";

//Área

        $h = 3;
        $r = 2;

        $area = 2 * M_PI * $r * ($r + $h);
        echo "<p> Su área es $area";

        $vol = M_PI * ($r ** 2) * $h;
        echo "<p>Su volumen es $vol";

//



    ?>

</body>
</html>