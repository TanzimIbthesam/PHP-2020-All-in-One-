<?php 
$str="Hello World";
//convert ascii characters to hexadecimal values

$bintohex=bin2hex("Hello World");

$hextobin=hex2bin($bintohex);

echo $hextobin;


?>