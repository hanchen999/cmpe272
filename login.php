<?php
$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$name = $_GET['uname'];
$password = $_GET['psw'];
$sql = "SELECT * FROM user.user_list WHERE name='$name' AND password='$password';";
$result = mysql_query( $sql, $conn );
if (mysql_num_rows($result) == 1) {
        header("Location:index.php?user=$name");
        exit;
} else {
       echo "<div>
                Sorry your username/password is wrong
             </div>
             <div>
                please send email to hc9999dragon@gmail.com
              </div>";
}
$conn->close();

?>
