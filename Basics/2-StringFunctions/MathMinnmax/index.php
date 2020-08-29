<?php 
$nums=[10,2,5,8,9];

print_r(min($nums));
echo "<br>";
print_r(max($nums));

$nums=
[
    min([20,50,90,40]),
    [20,60,70,80]
];
echo "<pre>";
print_r($nums);
echo "<pre/>";

$val=min(TRUE,0);

echo $val;


?>