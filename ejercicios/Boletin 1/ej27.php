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

        $h = 3;
        $r = 2;

        $area = 2 * M_PI * $r * ($r + $h);
        echo "<p> Su área es $area";

        $vol = M_PI * ($r ** 2) * $h;
        echo "<p>Su volumen es $vol";

    ?>

</body>
</html>