<?php

$a=1;
$b=2;
    function suma(){

        $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];

    }

        suma();
        echo $b;

?>