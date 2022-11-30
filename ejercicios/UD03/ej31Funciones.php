<?php
function opSuma($ope1, $ope2)
{
    $toal = 0;
    $total = $ope1 + $ope2;
    echo "<p>Suma total: $total</p>\n";
}

function prezoFinal($Precio)
{
        $IVA = ($Precio * 21) / 100;
        $rdo = $Precio + $IVA;
        return $rdo;

            echo "<p>Precio sin IVA: ". $Precio . "</p>\n";
            echo "<p> IVA: ". $IVA . "</p>\n";
            echo "<p>Precio sin IVA: ". $rdo . "</p>\n";

}
function cociente(int $num1, int $num2): array
{
    $rdo[0] = $num1 / $num2;
    $rdo[1] = $num1 % $num2;
    return $rdo;
}
function transHora(int $hora): array
{
    $rdo[0] = $hora * 60;
    $rdo[1] = $hora * 60 * 60;

       return $rdo;
}
function area($h, $r)
{
    $area = 2 * M_PI * $r * ($r + $h);
    return $area;
    
}
function volu($h, $r)
{
    $vol = M_PI * ($r**2) * $h;
    return $vol;
}
?>