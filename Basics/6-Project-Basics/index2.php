<?php

echo $_COOKIE[$name_of_cookie];
setcookie($name_of_cookie, $value_of_cookie, time() - (86400 * 30), "/");

?>