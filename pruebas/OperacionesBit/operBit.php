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

        $n1 = 46;
        $n2 = 77;
        echo "<p>Rdo OR: ". ($n1 | $n2) . "</p>";
        echo "<p>Rdo AND: ". ($n1 & $n2) . "</p>";

        $n3 = 90;

        echo "<p>Rdo desplazamiento izquierda: ". ($n3 << 4) . "</p>";
        echo "<p>Rdo desplazamiento derecha: ". ($n3 >> 5) . "</p>";

    ?>

</body>
</html>