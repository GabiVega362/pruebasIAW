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
        $far = 60;

        const num = '32';
        const num1 = '0.55556';
        const num2 = '237.15';

        $cel = ($far - num) * num1;
        $kel = $cel + num2;

        echo "<p>Grados Celsius ". $cel . "</p>";
        echo "<p>Grados Kelvin ". $kel . "</p>";

    ?>


</body>
</html>