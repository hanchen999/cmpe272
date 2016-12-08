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
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$homeaddress = $_GET['homeaddress'];
$homephone = $_GET['homephone'];
$cellphone = $_GET['cellphone'];
$date = date('Y-m-d H:i:s');
$sql = "SELECT * FROM user.user_list_updated WHERE name='$name';";
$result = mysql_query( $sql, $conn );
if (mysql_num_rows($result) > 0) {
	echo "<div>
	        Sorry this username '$name' has been registered;
	      </div>";
} else {
	$sql = "INSERT INTO user.user_list_updated (name, password, submission_date, firstname, lastame, email, address, homephone, cellphone) VALUES ('$name', '$password', '$date', '$firstname', '$lastname', '$email', '$homeaddress', '$homephone', '$cellphone');";
	if ( mysql_query( $sql, $conn ) === TRUE) {
      header("Location: index.php?user=$name");
       exit;
    } else {
        echo "Error: " . $sql;
        echo "hello: " . mysql_error($conn);
    }
}
$conn->close();

?>
