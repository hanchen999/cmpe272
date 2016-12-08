<?php
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');  

	require_once('DB_individual.php');
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	$parameter = $_REQUEST;
	$star = $parameter["rate_star"];
	$comment = $parameter["rate_comment"];
	$product_id = $parameter["product_id"];

	
	$SQL = "insert into market_rate(username,product_id,rate,comment)
			VALUES('Anonymous','$product_id',$star,'$comment')";
	mysqli_query($conn, $SQL);
        $data = array(
                            "username"  => "Anonymous",
                            "product_id" => $product_id,
                            "rate" => $star,
                            "comment" => $comment,
                       );
        $domain =  "http://www.hanchen-cmpe.com/272finalProject/272deploy/cross-domain-communication-idea/market_place_website/rate.php";
        $parameters = array(
                        "type" => $type,
                        "data" => $data
                );
               $parameters = json_encode($parameters);
                $curl1 = curl_init();
                curl_setopt($curl1, CURLOPT_URL, $domain);
                //exit($domain."/request.php");
                curl_setopt($curl1, CURLOPT_POST, true);
        //curl_setopt($curl1, CURLOPT_URL, $domain."/request.php");
                //curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl1, CURLOPT_POSTFIELDS, $parameters);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result1 = curl_exec($curl1);
                curl_close($curl1);
?>
