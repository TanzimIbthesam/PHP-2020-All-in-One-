<?php 

$str="Hello World <b>We all are here</b>";

echo strip_tags($str);

echo "<br>";

$word_wrap="Hello World its there";

// echo wordwrap($word_wrap,4,"<br>");
echo wordwrap($word_wrap,4,"<br>",TRUE);



?>