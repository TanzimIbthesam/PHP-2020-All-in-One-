<?php 
$colors=[
'Red','Green','Blue','Orange'
];

$array_keys=array_keys($colors);

print_r($array_keys);
// var_dump($colors);
//assosistiave array
$colorstwo=[
    "First"=>"Red",
    "Second"=>"Red",
    "Third"=>"Red",
];

print_r(array_key_first($colorstwo));
echo "<br>";
print_r(array_key_last($colorstwo));
echo "<br>";
if(array_key_exists("Casper",$colorstwo)){
   echo "First is there","<br>";
}else{
    echo "Not there","<br>";
}


?>