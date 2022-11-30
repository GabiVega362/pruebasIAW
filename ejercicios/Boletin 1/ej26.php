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

        $nome = "Pepito";
        $altpes = "6";
        $pesolb = "200";

        $pesokg = round($pesolb * 0.453592,2);
        echo "<p> Su peso en KG es de $pesokg </p>";

        $altcm = ($altpes * 30.48);
        echo "<p>Altura en cm $altcm</p>";

            $altm = $altcm / 100;
        $imc =round( $pesokg / ($altm ** 2), 2);

        echo "<p> Su IMC es: $imc </p>"

    ?>

</body>
</html>