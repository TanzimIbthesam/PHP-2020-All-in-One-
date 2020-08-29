<?php
$food=[
"Burger",
"Pizza",
"Chocolate",
"Vanilla"
];
// echo current($food);
// echo pos($food);
//  echo next($food);
echo current($food);
echo key($food);
echo pos($food);
echo next($food);
echo current($food);
// echo prev($food);
echo next($food);
echo end($food);
echo "<pre>";
print_r(each($food));
echo "<pre>";
reset($food);
echo current($food);
// echo key($food);
?>