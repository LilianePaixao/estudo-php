<?php

$correntistas =[
    "Liliane",
    "Emanuel",
    "Marcos",
    "Efigênia"
];

$saldoCorrentistas = [
    10000,
    5000,
    4000,
    3000
];

$relacionados = array_combine($correntistas,$saldoCorrentistas);
echo "<pre>";
var_dump($relacionados);
echo"</pre>";