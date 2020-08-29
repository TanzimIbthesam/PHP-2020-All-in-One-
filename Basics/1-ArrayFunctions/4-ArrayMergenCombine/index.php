<?php
// index array
// $citiesofAsia=['Dhaka','Delhi','Karachi','Colombo'];

// $citiesofEurope=['London','Paris','Zurich','Istanbul'];

//  $newcitieslist=array_merge($citiesofAsia,$citiesofEurope);
// // $newcitieslist = array_combine($citiesofAsia, $citiesofEurope);
// echo "<pre>";
// print_r($newcitieslist);
// echo "</pre>";


//assosiative array
// $citiesofAsia=[
//            ['Dhaka', 'Delhi', 'Karachi', 'Colombo']
// ];
// $citiesofEurope=[
//     ['London', 'Paris', 'Zurich', 'Istanbul']
// ];
// // $newcitieslist=array_merge($citiesofAsia,$citiesofEurope);
// $newcitieslist = array_merge($citiesofAsia, $citiesofEurope);
// echo "<pre>";
// print_r($newcitieslist);
// echo "</pre>";
// Multidimensional Array
$a=[
    [
        'First'=>'Hello'
    ],
    [
        'Second'=>'Hello'
    ]
    ];
$b=[
    [
        'First'=>'Hello'
    ],
    [
        'Second'=>'Hello'
    ]
    ];
$newarray=array_merge_recursive($a,$b);
echo "<pre>";
print_r($newarray);

echo "</pre>";



?>