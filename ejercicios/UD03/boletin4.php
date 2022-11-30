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
        $ciudades = ["madrid" => 30000000, "vigo" => 400000, "pontevedra" => 20786];

        $base = 0;
        foreach($ciudades as $clave => $valor){
            if($valor > $base){
                $base = $valor;
                $nombre = $clave;
            }
        }
        
        echo $nombre;
    ?>
</body>
</html>