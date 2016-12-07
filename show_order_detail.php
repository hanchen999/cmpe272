<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order History</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
   require_once('DB_individual.php');
   $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
   $number = 1;
   $result = mysqli_query($conn, "SELECT * FROM cmpe272FinalProject.market_order WHERE username = '$username'");
		while($row = mysqli_fetch_assoc($result)){
?>
   <div class="container">
  <h2>Order <?php echo $number; ?> Detail</h2>
  <p>UserName: <?php echo $row['username'];?> Total Cost: <?php echo $row['cost'];?></p>            
  <table class="table">
    <thead>
      <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Quantity</th>
        <th>Cost</th>th>
      </tr>
    </thead>
    <tbody>
    <?php
       $product_ids = explode(",",$row['product_ids']);
       $quantities = explode(",",$row['quantity']);
       for ($i = 0; $i < sizeof($product_ids); ++$i) {
       	    $product_id = $product_ids[$i];
       	    $quantity = $quantities[$i];
       	    $temp = mysqli_query($conn, "SELECT * FROM cmpe272FinalProject.market_product WHERE product_id = '$product_id'");
       	    $row = mysqli_fetch_assoc($temp);
       	    $price = $row['price'];
       	    $name = $row['name'];
       	    ?>
       	<tr>
       		<td><?php echo $product_id;?></td>
            <td><?php echo $name;?></td>
            <td><?php echo $quantity;?></td>
            <td><?php echo $quantity * $price;?></td>
       	</tr>
       <?php } ?>
       </tbody>
       </table>
       <div></div>
       <div></div>
       </div>
<?php	$number  = $number + 1; } ?>
</body>
</html>

