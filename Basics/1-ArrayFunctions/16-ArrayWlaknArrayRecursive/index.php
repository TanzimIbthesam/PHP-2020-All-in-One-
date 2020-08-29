<?php
$employeestwo =
    [
        'id' => 1,
        'name' => 200,
        'department' => 30
    ];
$employees =
    [
        $employeestwo,
        'id' => 1,
        'name' => 20,
        'department' => 3
    ];

// $array_walk=array_walk($employees,"newfunction");
$array_walk=array_walk_recursive($employees,"newfunction","is a key of");

 function newfunction($value,$key,$param)
{
   echo  "{$key}-{$param}-{$value}","<br>";
}


?>