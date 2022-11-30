<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $varBol = true;
        $varE = 4;
        $varF = 5.7236854684;
        $varC = "Esto es una cadena";

        echo "La variable \$varBol es escalar= ".is_scalar($varBol).", es numerica="
        . is_numeric($varBol)."es de tipo= ". gettype($varBol)."</br>";

        echo "La variable \$varE es escalar= ".is_scalar($varE).", es numerica= "
        . is_numeric($varE)."es de tipo= ". gettype($varE)."</br>";

        echo "La variable \$varF es escalar= ".is_scalar($varF).", es numerica= "
        . is_numeric($varF)."es de tipo= ". gettype($varF)."</br>";

        echo "La variable \$varC es escalar= ".is_scalar($varC).", es numerica= "
        . is_numeric($varC)."es de tipo= ". gettype($varC)."</br>";

    ?>
</body>
</html>