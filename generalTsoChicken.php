<?php
$cookie = array();
$record = array();
if (isset($_COOKIE['most']) && !empty($_COOKIE['most'])) {
    // exists, has a value
    $record =  $_COOKIE['most'];
    $record = unserialize($record);
}
if (array_key_exists("General Tso's Chicken", $record)) {
   $record["General Tso's Chicken"]++;
} else {
   $record["General Tso's Chicken"] = 1;
}
setcookie('most', serialize($record), time()+3600);
if (isset($_COOKIE['latest']) && !empty($_COOKIE['latest'])) {
    // exists, has a value
    $cookie =  $_COOKIE['latest'];
    $cookie = unserialize($cookie);
}
$cookie[] = "General Tso's Chicken";
if (count($cookie) == 6) {
   $cookie = array_slice($cookie, 1);
}
setcookie('latest', serialize($cookie), time()+3600);
?>

<!DOCTYPE html>
<html>
<body>
<h1>GENERAL TSO'S CHICKEN</h1>
<div><img src="GeneralTsosChicken.jpg"></div>
<div>
All-white meat chicken, red and yellow bell peppers, onions and string beans in a spicy, savory and slightly sweet sauce. 
</div>
</body>
</html>
