<?php 
$str="Hello World";

$enodoString=convert_uuencode($str);

echo $enodoString,"<br>";

$decodeString=convert_uudecode($enodoString);

echo $decodeString;





?>