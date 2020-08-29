<?php 
$name_of_cookie="Username";
$value_of_cookie="tanzim101";

setcookie($name_of_cookie,$value_of_cookie,time()+(86400*30),"/");




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_COOKIE[$name_of_cookie])){
        echo $_COOKIE[$name_of_cookie];
    }else{
        echo "Cookie not set";
    }


?>
</body>
</html>