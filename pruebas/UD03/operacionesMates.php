<?php

//$ope es OPERANDO

function opeMates($ope1, $ope2, $ope = '*')
{
    switch($ope){
        case '+':
            $total = $ope1 + $ope2;
            break;
        case '-':
            $total = $ope1 - $ope2;
            break;
        case '/':
            $total = $ope1 / $ope2;
            break;
        case '%':
            $total = $ope1 % $ope2;
             break;
        case '*':
            $total = $ope1 * $ope2;
    }
    return $total;
    echo "<h1>Total de $ope1 $ope $ope2 = $total</h1>\n";
}
/*
    function suma($ope1, $ope2)
    {
        $total = $ope1 + $ope2;
        echo "<h1>Suma de $ope1 + $ope2 = $total</h1>\n";
    }
    function resta($ope1, $ope2)
    {
        $total = $ope1 - $ope2;
        echo "<h1>Resta de $ope1 - $ope2 = $total</h1>\n";
    }
    function producto($ope1, $ope2){
        $total = $ope1 % $ope2;
        echo "<h1>Productoi de $ope1 / $ope2 = $total</h1>\n";
    }
    function division($ope1, $ope2){
        $total = $ope1 / $ope2;
        echo "<h1>División de $ope1 / $ope2 = $total</h1>\n";
    }
*/

?>