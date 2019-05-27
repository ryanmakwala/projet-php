<?php

//required headers
header("Access-Control-Allow-Origin:*");
header("Content-Type: application/json; charset=utf8");

//include database and object files
include_once '../config/database.php';
include_once '../objects/latestprescriptions.php';

//instantiate database and prodoct object 
$database = new Database();
$db = $database->getConnection();

//initialize object 
$latestprescriptions = new Latestprescriptions($db);

$stmt = $latestprescriptions->read();

$latestprescriptions_arr = array();
$latestprescriptions_arr['records'] = array();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	extract($row);

	$latestprescriptions_item= array(
        "id" => $id,
		"date" => $date,
        "patient" => $patient,
        "doctor" => $doctor,
        "medecine" => $medecine
	);

	array_push($latestprescriptions_arr['records'], $latestprescriptions_item);
}


http_response_code(200);

echo json_encode($latestprescriptions_arr);

?>