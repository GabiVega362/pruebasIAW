<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $Precio = 10.99;
        $IVA = ($Precio * 21) / 100;
        $rdo = $Precio + $IVA;

            echo "<p>Precio sin IVA: ". $Precio . "</p>\n";
            echo "<p> IVA: ". $IVA . "</p>\n";
            echo "<p>Precio sin IVA: ". $rdo . "</p>\n";

    ?>
</body>
</html>