<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo 12</title>
</head>
<body>
    <?php

//Bucles con While

        $ninf = 7;
        $nsup = 24;
        
       
        $cont = 0;
        while ($ninf <= $nsup) {

            echo "<p>Número en la variable: $i  </p>\n";
            $ninf++;

            $cont++;
        }

        echo "<p> Entre el número $ninf y el número $nsup hay $cont números. </p>\n "

    ?>
</body>
</html>