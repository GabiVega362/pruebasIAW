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

    $i = 0;
    $vec1 = [7,4,1,2,5,3,6];
    $vec2 = [4,1,2,0,8,7,4];
   
    foreach($vec1 as $clave => $valor1) {
        $suma[$i] = $valor1 + $vec2[$clave];
        $i++;
    }

    var_dump($suma);
    ?>
</body>
</html>