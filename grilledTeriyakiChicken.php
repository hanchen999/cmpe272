<?php
$cookie = array();
$record = array();
if (isset($_COOKIE['most']) && !empty($_COOKIE['most'])) {
    // exists, has a value
    $record =  $_COOKIE['most'];
    $record = unserialize($record);
}
if (array_key_exists("Grilled Teriyaki Chicken", $record)) {
   $record["Grilled Teriyaki Chicken"]++;
} else {
   $record["Grilled Teriyaki Chicken"] = 1;
}
setcookie('most', serialize($record), time()+3600);
if (isset($_COOKIE['latest']) && !empty($_COOKIE['latest'])) {
    // exists, has a value
    $cookie =  $_COOKIE['latest'];
    $cookie = unserialize($cookie);
}
$cookie[] = "Grilled Teriyaki Chicken";
if (count($cookie) == 6) {
   $cookie = array_slice($cookie, 1);
}
setcookie('latest', serialize($cookie), time()+3600);
?>

<!DOCTYPE html>
<html>
<body>
<h1>GRILLED TERIYAKI CHICKEN</h1>
<div><img src="GrilledTeriyakiChicken.jpg"></div>
<div>
Grilled chicken hand-sliced to order and served with teriyaki sauce. Availability of Grilled Teriyaki Chicken may vary by location. View our Nutrition PDF for details.
</div>
</body>
</html>
