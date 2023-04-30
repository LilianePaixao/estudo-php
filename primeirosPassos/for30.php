<?php

/*
for ($i=0; $i <= 10 ; $i+=5) { 
	echo "$i <br>";
}
*/

/*
for ($i=0; $i <= 1000 ; $i+=5) { 

	if ( ($i >= 200) && ($i <= 800) ) continue;

	if ($i == 900) break;
	
	echo "$i <br>";
}
*/
echo "<select>";

for ($i = date("Y") ; $i > date("Y") -100 ; $i-=5) {
	echo '<option value="'.$i.'">'.$i.'</option>';
}

echo "</select>";

?>