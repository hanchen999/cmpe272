<?php
   require_once('DB_individual.php');
   $connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
   $result = mysqli_query($connect, "SELECT * from market_product");
   while($row = mysqli_fetch_assoc($result)) {
   	$product_id = $row['product_id'];
   	$rate = rand(0,5);
   	$comment = 'This is awesome！';
   $SQL = "Insert into market_rate(username,product_id,rate,comment)
				VALUES('annoymous','$product_id',$rate,'$comment')";
	mysqli_query($connect,$SQL);
    }
	$connect->close();
?>
