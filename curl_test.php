<?php
//
// A very simple PHP example that sends a HTTP POST to a remote site
//

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://www.hanchen-cmpe.com/272/user_server.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


$server_output = curl_exec ($ch);
echo "<h1>Company: Dong Bei Cai Guan User List</h1>";
echo "<div>$server_output</div>";

curl_setopt($ch, CURLOPT_URL,"http://www.elainewebsite.com/user_server.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);
echo "<h1>Company: Elaine Travel Company User List</h1>";
echo "<div>$server_output</div>";

curl_setopt($ch, CURLOPT_URL,"http://www.shuoranzhang.com/user/list_of_user.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);
//$server_output = json_decode($server_output, true);
echo "<h1>Company: Home in Fremont</h1>";
//foreach($server_output as $data) {
//$data = array($data);
//$firstname = $data['firstname'];
//$lastname = $data['lastname'];
//echo"<div>$firstname $lastname</div>";
echo "<div>$server_output</div>";
//}
curl_close ($ch);

// further processing ....
//if ($server_output == "OK") { ... } else { ... }

?>

