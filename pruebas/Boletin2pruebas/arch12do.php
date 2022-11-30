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
        $ninf = 1;
        $nsup = 10;
        $i = $ninf;
        $cont = 0;
        do {

            echo "<p>Número en la variable: $i  </p>\n";
            $i++;
            $cont++;
        }while($i <= $nsup);

        echo "<p> Entre el número $ninf y el número $nsup hay $cont números. </p>\n "
    ?>
</body>
</html>