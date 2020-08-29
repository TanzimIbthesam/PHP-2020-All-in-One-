<?php
 function compare($a,$b)
{
    if($a===$b){
        return 0;
    }
    return ($a>$b)?1:-1;
}
 function compareValue($a,$b)
{
    if($a===$b){
        return 0;
    }
    return ($a>$b)?1:-1;
}
$colorsone = [
    "First" => "Red",
    "Second" => "Green",
    "Third" => "Blue",
];
$colorstwo = [
    "First" => "Red",
    "Fourth" => "Green",
    "Fifth" => "Blue",
];

// $array_intersect_key=array_intersect($colorsone,$colorstwo);
// $array_intersect_key=array_uintersect_assoc($colorsone,$colorstwo,"compare");
$array_intersect_key=array_uintersect_uassoc($colorsone,$colorstwo,"compare","compareValue");

echo "<pre>";
print_r($array_intersect_key);
echo "</pre>";