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
$cookie[] = "Orange Chicken";
if (array_key_exists("Orange Chicken", $record)) {
   $record["Orange Chicken"]++;
} else {
   $record["Orange Chicken"] = 1;
}
setcookie('most', serialize($record), time()+3600);
if (count($cookie) == 6) {
   $cookie = array_slice($cookie, 1);
}
setcookie('latest', serialize($cookie), time()+3600);
?>

<!DOCTYPE html>
<html>
<body>
<h1>ORANGE CHICKEN Spicy</h1>
<div>
<img src="orangeChicken.jpg">
</div>
<div>
Our signature dish. Crispy chicken wok-tossed in a sweet and spicy orange sauce.
</div>
</body>
</html>
