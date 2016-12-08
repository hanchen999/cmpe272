<?php
require_once('DB_individual.php');
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	$product_id = "";
	$SQL = "UPDATE market_product SET visited = visited + 1 WHERE product_id='$product_id'";
	mysqli_query($conn, $SQL);
?>