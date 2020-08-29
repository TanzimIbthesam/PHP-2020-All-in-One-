<?php 

$str='Hello I am here "yes"' ;

echo $str,"<br>";


// echo addslashes($str);
$newStr=addcslashes($str,"a...f");

echo stripslashes($newStr);



?>