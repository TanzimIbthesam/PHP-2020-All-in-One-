<?php
$fruits = [
    [1, 'Tanzim', 'Executive', 25],
    [2, 'Mark', 'Executive', 25],
    [3, 'John', 'Executive', 25],

];
//   echo "<pre>";
//     print_r($fruits);
// foreach($fruits as $fruit=>$value){
//     echo "{$fruit}->{$value}";

// }
// echo $fruits[0][0];
// echo $fruits[0][1];
// echo $fruits[0][2];
// echo $fruits[0][3];
// $count=count($fruits);
// echo $count;
for ($row = 0; $row < count($fruits); $row++) {
    for ($col = 0; $col < count($fruits); $col++) {
        echo $fruits[$row][$col];
        echo "<br>";
    }
}