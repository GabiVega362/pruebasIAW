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

    $i = $rangoI;
    for ( ; ; ) {
        if ($i <= $rangoS){
            if ($i % 2 == 0){
                $cont++;
            }
            $i++;
        } else{
            break;
        }
    }
    echo "<p> Entre $rangoI y $rangoS hay $cont números";
    

     //2
     $rangoI = 30;
     $rangoS = 75;
     $cont = 0;
 
     $i = $rangoI;
     for ( $i = $rangoI; ; $i++ ) {
         if ($i <= $rangoS){
             if ($i % 2 == 0){
                 $cont++;
             }
             $i++;
         } else{
             break;
         }
     }
     echo "<p> Entre $rangoI y $rangoS hay $cont números </p>";

     //3
    
      for ($i = 1; $i <= 10 ; print $i. "\n", $i++){
   
    }
  
    ?>
</body>
</html>