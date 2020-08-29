<?php 

$old_date=mktime(0,0,0,03,15,2015);
$date=getdate($old_date);

echo $date['month'];
echo "<pre>";

print_r(getdate());
echo "</pre>";
echo "<pre>";

print_r(gettimeofday());
echo "</pre>";
echo "<pre>";

// print_r(localtime(time(),true));
print_r(localtime($old_date,true));
echo "</pre>";



?>