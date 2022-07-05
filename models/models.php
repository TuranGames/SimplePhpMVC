<?php


function select_Data($tablica, $arr = NULL, $OrderLimit = NULL){
	
	global $db;
	//   Check whether array is given or not
	if($arr != NULL){
		$key = array_keys($arr);
		$value = array_values($arr);
		$i = 0;
		$arrayLength = count($arr);
		if($OrderLimit != NULL){
		$orderLength = count($OrderLimit);
			if($orderLength == 3){
				$sort = " ORDER BY id ".$OrderLimit[0]." LIMIT ".$OrderLimit[1].", ".$OrderLimit[2];
			 }else if($orderLength == 2){
				$sort = " ORDER BY id ".$OrderLimit[0]." LIMIT ".$OrderLimit[1];	
			 }
			  else if($orderLength == 1){
				$sort = " ORDER BY id ".$OrderLimit[0];	
			 }
		}else{
		$sort = "";
		}

		$baseText = "SELECT * FROM $tablica WHERE ";

	 foreach ($arr as $array) {
		if($arrayLength - 1 != $i){
		$baseText = $baseText.$key[$i]." = "."'".$value[$i]."'"." AND ";
		}else{
		$baseText = $baseText.$key[$i]." = "."'".$value[$i]."'";
		}
		$i++;
	 }
	}
	
		// Getting all data from table and check WHERE to take them
	if($arrayLength < 1){ 
		$sql = "SELECT * FROM $tablica ";
	}else{
		$sql = $baseText;	
	}

	  $sql = $sql.$sort;
        
       // var_dump($sql);
        $result = mysqli_query($db, $sql);
		$n = mysqli_num_rows($result);
		//  Pasting all data into array $articles
		$articles = array();
		for($i = 0; $i < $n; $i++)
		{
			$row = mysqli_fetch_assoc($result);
			
			$articles[] = $row;
		}

	return $articles;
}



function insert_Data($tablica, $arr = NULL){
global $db;
$key = array_keys($arr);
$value = array_values($arr);
$arrayLength = count($arr);
$i = 0;

$baseText = "INSERT INTO $tablica ";
$parameter = "(";
$values = "(";

 foreach ($arr as $array) {
		if($arrayLength - 1 != $i){
		$parameter = $parameter.$key[$i].", ";
		$values = $values."'".$value[$i]."'".", ";
	}else{
		$parameter = $parameter.$key[$i].")";
		$values = $values."'".$value[$i]."'".")";
	}
		
		$i++;
	 }
	 
	  $zapros = $baseText." ".$parameter." VALUES ".$values;



$result = mysqli_query($db, "$zapros");
if(!$result){

		return false;
	}
		else{
			return true;
		}

	
}

function update_Data($tablica, $arr = NULL,$where = NULL){
global $db;
$key = array_keys($arr);
$value = array_values($arr);
$wherekey = array_keys($where);
$wherevalue = array_values($where);
$arrayLength = count($arr);
$whereLength = count($where);
$i = 0;

$baseText = "UPDATE $tablica SET";

 foreach ($arr as $array) {
		if($arrayLength - 1 != $i){
		$parameter = $parameter.$key[$i]." = "."'".$value[$i]."'"." , ";
	}else{
		$parameter = $parameter.$key[$i]." = "."'".$value[$i]."'";
	}
		
		$i++;
	 }
	 $i = 0;
	 	 foreach ($where as $array) {
		if($whereLength - 1 != $i){
		$whereText = $whereText.$wherekey[$i]." = "."'".$wherevalue[$i]."'"." AND ";
		}else{
		$whereText = $whereText.$wherekey[$i]." = "."'".$wherevalue[$i]."'";
	}
		
		$i++;
	 } 
	 
	  $zapros = $baseText." ".$parameter." WHERE ".$whereText;


$result = mysqli_query($db, "$zapros");
 if($result){
		return true;
	}
	else{
			return false;
		}

	
}

function get_CountFrom($tablica, $arr = NULL){

	global $db;
	if($arr != NULL){
		$key = array_keys($arr);
		$value = array_values($arr);
		$i = 0;
		$arrayLength = count($arr);
			$baseText = "SELECT count(id) AS total FROM $tablica WHERE ";

	 foreach ($arr as $array) {
		if($arrayLength - 1 != $i){
		$baseText = $baseText.$key[$i]." = "."'".$value[$i]."'"." AND ";
		}else{
		$baseText = $baseText.$key[$i]." = "."'".$value[$i]."'";
		}
		$i++;
	 }
	}
if($arrayLength < 1){ 
		$sql = "SELECT count(id) AS total FROM $tablica ";

	}else{
		$sql = $baseText;

	}
$result=mysqli_query($db,$sql);
$data=mysqli_fetch_assoc($result);
return (int)$data['total'];


}















