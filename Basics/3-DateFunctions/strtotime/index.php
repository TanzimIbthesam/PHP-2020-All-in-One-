<?php 

// echo date("d-m-Y",strtotime("3 March 2015"))."<br>";
// echo date("d-m-Y H:m",strtotime("+5 hours"))."<br>";
// echo date("d-m-Y H:m",strtotime("+1 week"))."<br>";

// echo date("d-m-Y",strtotime("+1 week 3 days 7 hour 5 seconds "))."<br>";
// echo date("d-m-Y H:m",strtotime("next Monday"))."<br>";
// echo date("d-m-Y H:m",strtotime("last Sunday"))."<br>";
// echo date("d-m-Y H:m",strtotime("First day of last month"))."<br>";

echo strftime("%B %d %Y,%X %Z")."<br>";
echo strftime("%B %d %Y,%X %Z",mktime(21,30,0,05,18,2015))."<br>";


?>