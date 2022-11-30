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
        $num = 10;
        $numIgual = 4;
        $cuenta = 0;
        
        for ($i = 0 ; $i < $num; $i++){
            
            $valor[$i] = rand(1, 10);
            if($valor[$i] == $numIgual){
                $cuenta++;
            }
        }
        $num--;
        var_dump($valor);
        echo "<p>$cuenta</p>\n";
    ?>
</body>
</html>