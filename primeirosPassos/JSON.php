<?php

/*
$pessoas = array();

array_push ($pessoas, array(
	'parentesco'=> 'mãe',
	'idade'=> '70'
));

array_push ($pessoas, array(
	'parentesco'=> 'pai',
	'idade'=> '65'
));
echo json_encode($pessoas);
*/

$json='[
	{
	  "parentesco": "mãe",
	  "idade": "70"
	},
	{
	  "parentesco": "pai",
	  "idade": "65"
	}
  ]';

$data =  json_decode($json, true);

var_dump($data);

?>