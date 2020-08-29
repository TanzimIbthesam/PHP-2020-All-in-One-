<?php 

$cities=['London','USA','Brooklyn'];

// $removeCity=array_shift($cities);
$addCity = array_unshift($cities,'Brussels');
// echo "<pre>";
// print_r($removeCity);
//  echo "</pre>";

echo "<pre>";
print_r($addCity);
print_r($cities);
echo "</pre>";
