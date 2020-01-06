<?php 

include "credential.php"

function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}

function get_json($s) {
	return json_decode(file_get_contents($s)); 
}


function makeQuery($conn,$qry){
	$result = $conn->query($qry); 

 	if($conn->errno)
		die($conn->error);


	$result_array = [];

	while($row = $result->fetch_object()){
		$result_array[] = $row;
	}

	return $result_array;
}

 ?>