<?php
$cookie = array();
$record = array();
if (isset($_COOKIE['most']) && !empty($_COOKIE['most'])) {
    // exists, has a value
    $record =  $_COOKIE['most'];
    $record = unserialize($record);
}
if (array_key_exists("Black Pepper Chicken", $record)) {
   $record["Black Pepper Chicken"]++;
} else {
   $record["Black Pepper Chicken"] = 1;
}
setcookie('most', serialize($record), time()+3600);
if (isset($_COOKIE['latest']) && !empty($_COOKIE['latest'])) {
    // exists, has a value
    $cookie =  $_COOKIE['latest'];
    $cookie = unserialize($cookie);
}
$cookie[] = "Black Pepper Chicken";
if (count($cookie) == 6) {
   $cookie = array_slice($cookie, 1);
}
setcookie('latest', serialize($cookie), time()+3600);
?>

<!DOCTYPE html>
<html>
<body>
<h1>BLACK PEPPER CHICKEN</h1>
<div><img src="BlackPepperChicken.jpg"></div>
<div>
Marinated chicken, celery and onions in a bold black pepper sauce.
</div>
</body>
</html>
