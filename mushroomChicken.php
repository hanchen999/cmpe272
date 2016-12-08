<?php
$cookie = array();
$record = array();
if (isset($_COOKIE['latest']) && !empty($_COOKIE['latest'])) {
    // exists, has a value
    $cookie =  $_COOKIE['latest'];
    $cookie = unserialize($cookie);
}
if (isset($_COOKIE['most']) && !empty($_COOKIE['most'])) {
    // exists, has a value
    $record =  $_COOKIE['most'];
    $record = unserialize($record);
}
$cookie[] = "Mushroom Chicken";
if (array_key_exists("Mushroom Chicken", $record)) {
   $record["Mushroom Chicken"]++;
} else {
   $record["Mushroom Chicken"] = 1;
}
if (count($cookie) == 6) {
   $cookie = array_slice($cookie, 1);
}
setcookie('most', serialize($record), time()+3600);
setcookie('latest', serialize($cookie), time()+3600);

require_once('DB_individual.php');
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	$product_id = "20006";
	$SQL = "UPDATE market_product SET visited = visited + 1 WHERE product_id='$product_id'";
	mysqli_query($conn, $SQL);
?>

<!DOCTYPE html>
<html>
<body>
<h1>MUSHROOM CHICKEN</h1>
<div>
<img src="MushroomChicken.jpg">
</div>
<div>
A delicate combination of chicken, mushrooms and zucchini wok-tossed with a light ginger soy sauce.
</div>

<h1>Set Rate</h1>

		<!-- copy code from here -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.js"></script>
		<div id="RateBlock" style="width:500px;">
			<div id="setRate">
				<p>Please rate this product:</p>
				<div id="rateYo" style="padding-left:40px;"></div><br>
				<textarea rows="4" cols="50" id="rate_input"></textarea><br>
				<button id="rate_submit">Submit</button>
			</div>
			<div id="setRateThanks" style="display:none;">
				Thanks for submiting the review!
			</div>
		</div>
		<script>
			var rate_star;
			var rate_comment;
			var product_id;
			product_id = "20006";
			$( "#rate_submit" ).click(function() { 
			  $( "#setRate" ).css("display", "none");
			  $( "#setRateThanks" ).css("display", "block");
			  rate_comment = $("#rate_input").val();
			  $.post("http://www.hanchen-cmpe.com/272/final-project/setRate.php", {rate_star: rate_star, rate_comment:rate_comment, product_id:product_id}, function(result){
				});
			});
		 
		 
		  $("#rateYo").rateYo({
			starWidth: "40px",
			fullStar: true
			
		  });

		  $("#rateYo").rateYo()
			.on("rateyo.set", function (e, data) {
			rate_star = data.rating;
		  });
		</script>

</body>
</html>
