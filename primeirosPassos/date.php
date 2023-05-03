<?php

echo date("d/m/Y H:i:s");

echo "<br>";

echo date("d/m/Y");

echo "<br>";

echo time();

echo "<br>";

echo strtotime("29 August 1984");

echo "<br>";

echo date("d/m/Y", 462596400);

echo "<br>";

echo date("l, d/m/Y", 462596400);

echo "<br>";

echo strtotime("now");

echo "<br>";

echo date("d/m/Y", strtotime("+1 day"));
//add 1 dia a mais da data  atual

echo "<br>";


echo date("d/m/Y", strtotime("+1 week")); //add 1 semana a data atual
?>