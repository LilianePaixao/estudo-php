<?php


$pessoas = array();

array_push ($pessoas, array(
	'parentesco'=> 'mãe',
	'idade'=> '70'
));

array_push ($pessoas, array(
	'parentesco'=> 'pai',
	'idade'=> '65'
));
//print_r($pessoas);
print_r( $pessoas[1]['parentesco']);
