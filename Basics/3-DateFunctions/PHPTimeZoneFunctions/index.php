<?php 
date_default_timezone_set("Asia/Dhaka");

echo date_default_timezone_get();

$tz=timezone_open("Asia/Dhaka");

echo timezone_name_get($tz),"<br>";

echo "<pre>";
print_r(timezone_identifiers_list(10));
echo "</pre>";




?>