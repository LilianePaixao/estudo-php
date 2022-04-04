<?php
    // c) Ler um número e imprimir a tabuada do mesmo.

    $param1 = 2;
    readNumber($param1);

    function readNumber($param1){    
            for ($c = 0; $c <= 10; $c++){
            $resultado = $param1 * $c;
            echo "$param1 x  $c  = $resultado ". PHP_EOL;
            }        
        }
?>