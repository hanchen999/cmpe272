<?php
$cookie = array();
$record = array();
if (isset($_COOKIE['most']) && !empty($_COOKIE['most'])) {
    // exists, has a value
    $record =  $_COOKIE['most'];
    $record = unserialize($record);
}
if (array_key_exists("Broccoli Beef", $record)) {
   $record["Broccoli Beef"]++;
} else {
   $record["Broccoli Beef"] = 1;
}
setcookie('most', serialize($record), time()+3600);
if (isset($_COOKIE['latest']) && !empty($_COOKIE['latest'])) {
    // exists, has a value
    $cookie =  $_COOKIE['latest'];
    $cookie = unserialize($cookie);
}
$cookie[] = "Broccoli Beef";
if (count($cookie) == 6) {
   $cookie = array_slice($cookie, 1);
}
setcookie('latest', serialize($cookie), time()+3600);
?>

<!DOCTYPE html>
<html>
<body>
<h1>BROCCOLI BEEF</h1>
<div><img src="BroccoliBeef.jpeg"></div>
<div>
A classic favorite. Tender beef and fresh broccoli in a ginger soy sauce.
</div>
</body>
</html>
