<?php 
// $prices=[60,70,80,100];
$fruits=['Orange' ,'Fruits'];
function myfunction($price)
{
    // return $price/2;
    return strtoupper($price);
}
$array_map=array_map("myfunction",$fruits);
echo "<pre>";
print_r($array_map);
echo  "</pre>";
?>
