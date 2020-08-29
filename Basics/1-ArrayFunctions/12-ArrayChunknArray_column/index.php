<?php 
// $employees=[
//     [
//         'id'=>1,
//         'name'=>'Tanzim',
//         'department'=>'IT'
//     ],

//     [
//         'id' => 2,
//         'name' => 'Mark',
//         'department' => 'HR'
//     ]
//     ];
$employees=[
    [
        'id'=>1,
        'name'=>'Tanzim',
        'department'=>'IT'
    ],

    ];

//  $newcolumn=array_column($employees,"name");
//  $newchunk=array_chunk($employees,2,true);
 $newchunk=array_chunk($employees,2);
 //array_column-return all the matching keys as per our need and displays them
 //array_chunk0
echo "<pre>";

// print_r($newcolumn);
print_r($newchunk);
echo "</pre>";





?>