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
$cookie[] = "Orange Chicken";
if (array_key_exists("Orange Chicken", $record)) {
   $record["Orange Chicken"]++;
} else {
   $record["Orange Chicken"] = 1;
}
setcookie('most', serialize($record), time()+3600);
if (count($cookie) == 6) {
   $cookie = array_slice($cookie, 1);
}
setcookie('latest', serialize($cookie), time()+3600);
?>

<!DOCTYPE html>
<html>
<body>
<h1>ORANGE CHICKEN Spicy</h1>
<div>
<img src="orangeChicken.jpg">
</div>
<div>
Our signature dish. Crispy chicken wok-tossed in a sweet and spicy orange sauce.
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
			product_id = "50001";
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
