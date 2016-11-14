<?php
$cookie = array();
$record = array();
if (isset($_COOKIE['most']) && !empty($_COOKIE['most'])) {
    // exists, has a value
    $record =  $_COOKIE['most'];
    $record = unserialize($record);
}
if (array_key_exists("Spring Bean Chicken Breast", $record)) {
   $record["Spring Bean Chicken Breast"]++;
} else {
   $record["Spring Bean Chicken Breast"] = 1;
}
setcookie('most', serialize($record), time()+3600);
if (isset($_COOKIE['latest']) && !empty($_COOKIE['latest'])) {
    // exists, has a value
    $cookie =  $_COOKIE['latest'];
    $cookie = unserialize($cookie);
}
$cookie[] = "Spring Bean Chicken Breast";
if (count($cookie) == 6) {
   $cookie = array_slice($cookie, 1);
}
setcookie('latest', serialize($cookie), time()+3600);
?>

<!DOCTYPE html>
<html>
<body>
<h1>STRING BEAN CHICKEN BREAST</h1>
<div><img src="StringBeanChickenBreast.jpg"></div>
<div>
Chicken breast, string beans and onions wok-tossed in a mild ginger soy sauce.
</div>
</body>
</html>
