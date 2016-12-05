<?php

	require_once('mainModel.php');
	//$parameter = $_POST;
       // exit('hello');
        $parameter = file_get_contents("php://input");
        //echo "hello\n";
        //return('hello'. $parameter);
	$parameter = json_decode($parameter, true);
	$type = $parameter["type"];
	$data = $parameter["data"];
        //exit('hello word' . $type);
        //$file = 'log.txt';
        //file_put_contents($file, $type);
        //file_put_contents($file, $data);
	$op = new mainModel();
	if($type=="getProducts"){
		$op->getProducts();
	} else if($type=="setUser"){
	       //exit($data["username"]);	
               $op->setUser($data);
	} else if($type=="setOrder"){
                //exit($data["cost"]);
		$op->setOrder($data);
	} else if($type=="getOrder"){
		$op->getOrder($data);
	} else if($type=="setRate"){
		$op->setRate($data);
	} else if($type=="getRate"){
		$op->getRate($data);
	} else if($type=="setVisit"){
		$op->setVisit($data);
	} else if($type=="getVisit"){
		$op->getVisit($data);
	} else {
		exit("request type error");
	}
?>
