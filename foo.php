<?php
function foo(&$ref){
	echo $ref.'<br />';
	$ref = 'HODENASU';
}

$var = 'NDA!';

foo($var);

echo $var;


?>
