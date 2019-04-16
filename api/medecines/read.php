<?php

//required headers
header("Access-Control-Allow-Origin:*");
header("Content-Type: application/json; charset=utf8");

//include database and object files
include_once '../config/database.php';
include_once '../objects/medecines.php';

//instantiate database and prodoct object 
$database = new Database();
$db = $database->getConnection();

//initialize object 
$user = new Medecines($db);

$stmt = $medecines->read();

$medecines_arr = array();
$medecines_arr['records'] = array();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	extract($row);

	$user_item= array(
		"id" => $id,
		"nom" => $nom,
		"description" => $description,
		"prix" => $prix,
	);

	array_push($medecines_arr['records'], $medecines_item);
}


http_response_code(200);

echo json_encode($medecines_arr);

?>