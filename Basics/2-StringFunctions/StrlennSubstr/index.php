<?php 
$username="Tan";

if(strlen($username)>5){
    echo "Username is ok";
}else{
    echo "Username is not ok";
}

$str="Hello world my name is Tanzim";

$substr_count=substr_count($str,"world");

print_r($substr_count);


?>