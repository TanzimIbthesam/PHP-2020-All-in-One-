<?php 

$date=date_create("2020-08-19 22:25:00",timezone_open("Asia/Dhaka"));


date_time_set($date,13,20);
echo date_format($date,"d/m/Y H:i:s");

