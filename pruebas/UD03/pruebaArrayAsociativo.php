<?php
$notasPepe = ["eie" => 7,"sri" => 5,"sad" => 7,"iaw" => 9,"aso" => 10,"asxbd" => 5];
$suma = 0;
$totalNotas = count($notasPepe);
//echo "<p> Nota SRI: " . $notasPepe["sri"] . "</p>\n";

//Calculo de nota media con array Asociativo

foreach($notasPepe as $valor){
    $suma += $valor;
}
    $media = $suma / $totalNotas;


echo "<p> Media de Pepe $media </p>\n";
foreach($notasPepe as $clave => $valor){
    echo "<p>La nota de $clave es : $valor </p>\n";
}
?>