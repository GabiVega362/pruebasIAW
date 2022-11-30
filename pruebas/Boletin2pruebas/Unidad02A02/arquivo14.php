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
    $rangoI = 30;
    $rangoS = 75;
    $cont = 0;
    $par = 0;

    for ($i = $rangoI; $i <= $rangoS ; $i++) {
         if($i % 2 == 0){
        $par++;
         }
        $cont++;
    }

    echo "<p> Entre $rangoI y $rangoS hay $cont numeros y $par pares "
    ?>
</body>
</html>