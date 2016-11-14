<?php
$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$search_username = $_GET['search_username'];
$search_email = $_GET['search_email'];
$search_cellphone = $_GET['search_cellphone'];
$flag = false;
$sql = "SELECT * FROM user.user_list_updated";
if ($search_username !== "") {
      $sql = $sql . " WHERE name='$search_username'";
      $flag = true; 
}
if ($search_email !== "") {
    if (!$flag) {
        $sql = $sql . " WHERE email='$search_email'";
        $flag = true;
    } else {
        $sql = $sql . " AND email='$search_email'";
   }
}
if ($search_cellphone !== "") {
    if (!$flag) {
        $sql = $sql . " WHERE cellphone='$search_cellphone'";
        $flag = true;
    } else {
        $sql = $sql . " AND cellphone='$search_cellphone'";
   }
}
$result = mysql_query( $sql, $conn );
if ($flag && mysql_num_rows($result) > 0) {
    echo "<div>Matched up!</div>";
    while($row = mysql_fetch_assoc($result)){
    foreach($row as $cname => $cvalue){
        echo "$cname: $cvalue\t";
    }
    echo "\r\n";
  }
} else {
  echo "<div>Can not find the match!</div>";
}
$conn->close();

?>
