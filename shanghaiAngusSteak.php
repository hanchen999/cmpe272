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
$cookie[] = "Shanghai Augus Steak";
if (array_key_exists("Shanghai Augus Steak", $record)) {
   $record["Shanghai Augus Steak"]++;
} else {
   $record["Shanghai Augus Steak"] = 1;
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
<h1>SHANGHAI ANGUS STEAK</h1>
<div>
<img src="ShanghaiAngusSteak.jpg">
</div>
<div>
Angus steak wok-seared with fresh asparagus, onions and mushrooms in a savory sauce.
</div>
</body>
</html>
