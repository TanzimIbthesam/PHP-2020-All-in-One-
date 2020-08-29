<?php
function compare($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}
function compareValue($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}
$colorsone = [
    "First" => "Red",
    "Second" => "Green",
    "Third" => "Blue",
    "Seventh" => "GreenOne",
    "Eigth" => "BlueOne",
];
$colorstwo = [
    "First" => "Red",
    "Fourth" => "Pink",
    "Fifth" => "Orangered",
    "Seventh" => "Green",
    "Eigth" => "Blue",
];
// $diff_array=array_diff($colorsone,$colorstwo);
//arraf_diff considers value which exists in array one but does not exists on array two
// $diff_array = array_diff_key($colorsone, $colorstwo);
//array_diff_assoc-Values match but keys dont match
$diff_array = array_diff_uassoc($colorsone, $colorstwo,"compare");
// $diff_array = array_diff_assoc($colorsone, $colorstwo);
echo "<pre>";
print_r($diff_array);
echo "</pre>";




?>