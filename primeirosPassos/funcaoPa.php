<?php

function ola($texto, $periodo = "Bom dia"){
	return "Olá $texto! $periodo! <br>";
}

echo ola("Mundo");
echo ola("Cristina", "Boa noite");
echo ola("Paixão", "Boa tarde");
echo ola("João", " ");
?>