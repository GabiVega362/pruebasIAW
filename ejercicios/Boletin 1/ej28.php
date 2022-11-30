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

    $mm = 32507578;

        $m =(Integer) ($mm / 1000);
        $resto = $m % 1000;
        $dm =(Integer) ($resto / 100);
        $resto = $dm % 100;
        $cm =(Integer) ($resto / 10);
        $mme = $resto % 10;
        echo "<p>Metros: $m decímetros: $dm centimetros: $cm";

    ?>

</body>
</html>