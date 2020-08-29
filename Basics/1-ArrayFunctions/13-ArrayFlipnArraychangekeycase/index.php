<?php 

$employees=
    [
        'id'=>1,
        'name'=>20,
        'department'=>30
    ];
 

    


 $array_flip=array_flip($employees);
//  $array_case_lower=array_change_key_case($employees,CASE_LOWER);
 $array_case_upper=array_change_key_case($employees,CASE_UPPER);

echo "<pre>";

print_r($array_flip);
echo "</pre>";
echo "<pre>";

print_r($array_case_upper);
echo "</pre>";
