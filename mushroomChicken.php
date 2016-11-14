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
$cookie[] = "Mushroom Chicken";
if (array_key_exists("Mushroom Chicken", $record)) {
   $record["Mushroom Chicken"]++;
} else {
   $record["Mushroom Chicken"] = 1;
}
if (count($cookie) == 6) {
   $cookie = array_slice($cookie, 1);
}
setcookie('most', serialize($record), time()+3600);
setcookie('latest', serialize($cookie), time()+3600);
?>

<!DOCTYPE html>
<html>
<body>
<h1>MUSHROOM CHICKEN</h1>
<div>
<img src="MushroomChicken.jpg">
</div>
<div>
A delicate combination of chicken, mushrooms and zucchini wok-tossed with a light ginger soy sauce.
</div>
</body>
</html>
