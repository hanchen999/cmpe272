<?php
$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "SELECT * FROM user.user_list_updated";
$result = mysql_query( $sql, $conn );
if (mysql_num_rows($result) > 0) {
while($row = mysql_fetch_assoc($result)){
        $row = json_encode($row);
    	echo "<div>$row</div>";
    echo "\r\n";
  }
} else {
  echo "<div>Can not find the match!</div>";
}
$conn->close();

?>
