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
        $hora = 24;
        $min = $hora * 60;
        $seg = $min * 60;

            echo "<p> Horas: ". $hora . "</p>\n";
            echo "<p> Minutos: ". $min . "</p>\n";
            echo "<p> Segundos: ". $seg . "</p>\n";

    ?>
</body>
</html>