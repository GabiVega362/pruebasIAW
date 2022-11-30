<?php
$notasPepe = [7,5,7,9,10,5,8];
$suma = 0;

for ($i = 0; $i < count($notasPepe); $i++){
    $suma += $notasPepe[$i];
}
$media = $suma / count($notasPepe);

//Forma fácil
// $exac = array_sum($notasPepe) / count($notasPepe);

echo "<p> Media de Pepe $media </p>\n";

?>