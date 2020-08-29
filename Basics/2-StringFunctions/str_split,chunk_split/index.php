<?php 

$name="Tanzim Ibthesam";
$str_split=str_split($name);
$chunk_split=chunk_split($name,1,"...");

echo "<pre>";

// print_r($str_split);
print_r($chunk_split);

echo "</pre>";



?>