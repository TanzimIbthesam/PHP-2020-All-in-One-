<?php 

// $fruits=['Apple','Banana','Orange','Plum'];
// $fruitstwo=['Pear','Grape','JackFruit','Cucumber'];

// $array_replace=array_replace($fruits,$fruitstwo);

// print_r($array_replace);
// print_r($fruits);
$fruits=[
      'Jackfruit'=>[
          'Red',
      ],
      'Orange'=>[
        "pink",
        "Green",
        
      ],
];
// print_r($fruits);
$fruitstwo =[
    'Jackfruit' => [
         "yellow"
    ],
    'Orange' => [
       "black"
    ],
];
$array_replace=array_replace_recursive($fruits,$fruitstwo);

echo "<pre>";

print_r($array_replace);

echo "</pre>";