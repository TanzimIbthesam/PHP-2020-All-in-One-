<?php
$a="orange";
$colors = [
   "a"=> 'Red',
    "b" => 'Blue',
   "c" => 'Green'
];
// extract($colors);
// extract($colors,EXTR_SKIP);
// extract($colors,EXTR_PREFIX_SAME,"test");
extract($colors,EXTR_PREFIX_ALL,"test");

echo "Value of  a is {$a}","<br>";
echo "Value of  a is {$test_a}","<br>";
echo "Value of  b is {$test_b}","<br>";
echo "Value of  c is {$test_c}","<br>";

$first_name="Tanzim";
$last_name="Ibthesam";
$gender="Male";

$extra=["gender"];

$compact=compact("first_name","last_name",$extra);
echo "<pre>";
print_r($compact);
echo "<pre/>";


?>