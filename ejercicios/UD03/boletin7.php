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
        $notas = [8,7,6,9,6,4,5,7,8,9,6,5,8,9,5];
        $nNotas = count($notas);
        $i = 1;
        $suma = 0;
        echo "<table border=1>";
        foreach ($notas as $valor){
            
           if ($i % 2 != 0){
            echo "<tr style='background-color: grey'>";
        }else {
            echo "<tr>";
        }    
            echo "       <th>Nota $i</th>
                    <td>$valor</td>
                  </tr>";
                  $suma += $valor;
                  $i++;
        }
        $media = $suma / $nNotas;
        echo "<tr>
                <th>MEDIA</th>
                <td> ". round($media,2) . " </td>
              </tr>";

              echo "</table>";
        
    ?>
</body>
</html>