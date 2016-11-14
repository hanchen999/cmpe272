<?php
$cookie = array();
$record = array();
if (isset($_COOKIE['latest']) && !empty($_COOKIE['latest'])) {
    // exists, has a value
    $cookie =  $_COOKIE['latest'];
    $cookie = unserialize($cookie);
}
if (isset($_COOKIE['most']) && !empty($_COOKIE['most'])) {
    // exists, has a value
    $record =  $_COOKIE['most'];
    $record = unserialize($record);
}
$cookie[] = "KUNG PAO CHICKE";
if (array_key_exists("KUNG PAO CHICKEN", $record)) {
   $record["KUNG PAO CHICKEN"]++;
} else {
   $record["KUNG PAO CHICKEN"] = 1;
}

if (count($cookie) == 6) {
   $cookie = array_slice($cookie, 1);
}
setcookie('latest', serialize($cookie), time()+3600);
setcookie('most', serialize($record), time()+3600);
?>


<!DOCTYPE html>
<html>
<body>
<h1>KUNG PAO CHICKEN</h1>
<div>
<img src="KungPaoChicken.jpg">
</div>
<div>
A Szechwan-inspired dish with chicken, peanuts and vegetables, finished with chili peppers.
</div>
</body>
</html>
