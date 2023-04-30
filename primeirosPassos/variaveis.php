<?php

// $nome = "Hcode";

// echo $nome;

// var_dump($nome);

//$nascimento = new DateTime();

//var_dump($nascimento);

//$arquivo = fopen("for.php", "r");

//var_dump($arquivo);

//$nulo = NULL;

//$nome = (int)$_GET["a"];

//var_dump($nome);

//$ip = $_SERVER["SCRIPT_NAME"];

//echo $ip;

//$ip = $_SERVER["REMOTE_ADDR"];

//echo $ip;

$nome = "Liliane";

function apresentaNome(){
	
	global $nome;
	echo $nome;
	echo " ";
}

function apresentaSobrenome(){
	
	$sobre = "Paixão";

	echo $sobre . " agora no apresentaSobrenome";

}

apresentaNome();
apresentaSobrenome();



?>
