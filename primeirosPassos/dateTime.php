<?php

$dt = new DateTime();

$periodo = new DateInterval("P7D");

echo $dt->format("d/m/Y H:i:s" );

echo "<br>";

$dt -> add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s" );

echo "<br>";

$dt = new DateTime();

$periodo = new DateInterval("P7D");

echo $dt->format("d/m/Y H:i:s" );

echo "<br>";

$dt -> add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s" );

//

$dt = "13/04/2013";


$periodo = new DateInterval("P20D");

echo "<br>";

$dt -> add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s" );