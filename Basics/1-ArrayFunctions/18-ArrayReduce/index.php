<?php
 function myFunction($n,$m)
{
    return $n+$m;
}
// $color = ["Red", "Green", "Yellow", "Blue"];
$nums=[10,20,30,40,50];

// $array_reduce=array_reduce($color,"myFunction",20);
$array_reduce=array_reduce($nums,"myFunction",20);
echo "<pre>";
print_r($array_reduce);
echo "</pre>";

?>