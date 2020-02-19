<?php
	//get the index 

$index = $_GET['index'];

	//fetch data from json
	$data = file_get_contents('../json/stationObjects.json');
		$input = json_decode($data, true);
array_splice($input, $index, 1);

//foreach(array_keys($input[$index]) as $key){
   
   //unset($input[$index]);
  
//}




	//encode back to json $data = json_encode((array)$input, 128);
	
	$data = json_encode((array)$input, 128);	 	
	file_put_contents('../json/stationObjects.json', $data);
	

	header('location: index.php');

?>