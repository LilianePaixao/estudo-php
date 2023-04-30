
<!--
$meses = array (
	"Janeiro", "Fevereiro", "Março",
	"Abril", "Maio", "Junho", "Julho",
	"Agosto", "Setembro", "Outubro",
	"Novembro", "Dezembro"
);

foreach ($meses as $key => $mes) {
	echo "O número $key é o $mes <br>";
}
-->

<form>

	<input type="text" name="nome" >
	<input type="date" name="nascimento">
	<input type="submit" value="Ok">

</form>

<?php

if (isset($_GET)){

	foreach ($_GET as $key => $value){

		echo " $key: $value <br>";
		
		echo "<hr>";
	}
}
?>