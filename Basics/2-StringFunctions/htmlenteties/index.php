<?php 
$str="<b>A 'quote' is needed</b>";
$anchor_tag='<a href="https://www.udemy.com">Udemy</a>';

echo $str,"<br>";

// echo htmlentities($str);
// echo htmlentities($anchor_tag,ENT_NOQUOTES);
$htmlentity=htmlentities($anchor_tag,ENT_QUOTES);
// $htmlentity=htmlspecialchars($anchor_tag,ENT_QUOTES);

echo $htmlentity,"<br>";




echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>";





?>