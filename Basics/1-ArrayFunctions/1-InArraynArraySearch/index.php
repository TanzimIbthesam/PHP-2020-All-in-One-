<?php 

$fruits=['Apple','Banana','Orange','Plum'];
echo "<pre>";
$in_array=in_array('Grapes',$fruits);
if($in_array)
echo "Matches found";
else echo "No matches found";
echo "</pre>";