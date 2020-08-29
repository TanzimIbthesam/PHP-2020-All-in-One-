<?php

// echo "Hour is ".date("H"),"<br>";
// echo "Hour is ".date("h"),"<br>";
// echo "Hour is ".date("G"),"<br>";
// echo "Hour is ".date("g"),"<br>";

echo "Hour is ".date("h"),"<br>";
echo "Minute is ".date("i"),"<br>";
echo "Seconds is ".date("s"),"<br>";
echo "Meridim is ".date("A"),"<br>";
echo "Time is  ".date("h:i:sa"),"<br>";
echo "Time and Date is ".date("d-m-Y h:i:sa"),"<br>";
//To get timezone of your default area
date_default_timezone_set("Asia/Dhaka");
echo "Time and Date is " . date("d-m-Y h:i:sa"), "<br>";





?>