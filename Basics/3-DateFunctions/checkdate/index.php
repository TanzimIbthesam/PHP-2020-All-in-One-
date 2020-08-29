<?php 

$check_date=checkdate(8,23,2020);
echo ($check_date) ?'Date is true':'Date is false',"<br>";

$date_create=date_create("2015-03-15");

$date_create_two=date_create("2017-03-15");

$diff_create=date_diff($date_create,$date_create_two);

// echo $diff_create->days;
echo $diff_create->format("%R%a days");
echo "<pre>";
print_r($diff_create);
echo "</pre>";

?>