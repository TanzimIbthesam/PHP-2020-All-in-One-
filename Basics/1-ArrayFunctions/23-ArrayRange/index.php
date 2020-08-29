<?php 
// $range=range(0,15,3);
$alphabet_range=range('a','q');

echo "<pre>";
// print_r($range);
print_r($alphabet_range);

echo "</pre>";

foreach ($alphabet_range as $range) {
    echo  $range,"<br>";
}



?>