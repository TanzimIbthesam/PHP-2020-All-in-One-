<?php 

$color=["Red","Green","Yellow","Blue"];

 $array_rand=array_rand($color,3);
// $array_rand=array_rand($color);

echo "<pre>";
print_r($array_rand);
shuffle($color);
print_r($color);
echo "</pre>";
// echo $color[$array_rand];


?>