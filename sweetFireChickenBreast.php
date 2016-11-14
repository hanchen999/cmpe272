<?php
$cookie = array();
$record = array();
if (isset($_COOKIE['most']) && !empty($_COOKIE['most'])) {
    // exists, has a value
    $record =  $_COOKIE['most'];
    $record = unserialize($record);
}
if (array_key_exists("Sweetfire Chicken Breast", $record)) {
   $record["Sweetfire Chicken Breast"]++;
} else {
   $record["Sweetfire Chicken Breast"] = 1;
}
setcookie('most', serialize($record), time()+3600);
if (isset($_COOKIE['latest']) && !empty($_COOKIE['latest'])) {
    // exists, has a value
    $cookie =  $_COOKIE['latest'];
    $cookie = unserialize($cookie);
}
$cookie[] = "Sweetfire Chicken Breast";
if (count($cookie) == 6) {
   $cookie = array_slice($cookie, 1);
}
setcookie('latest', serialize($cookie), time()+3600);
?>

<!DOCTYPE html>
<html>
<body>
<h1>SWEETFIRE CHICKEN BREAST</h1>
<div><img src="SweetFireChickenBreast.jpg"></div>
<div>
Crispy, white-meat chicken, red bell peppers, onions and pineapples in a bright and sweet chili sauce.
</div>
</body>
</html>
