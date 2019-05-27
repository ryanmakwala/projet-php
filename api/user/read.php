<?php

//required headers
header("Access-Control-Allow-Origin:*");
header("Content-Type: application/json; charset=utf8");

//include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';

//instantiate database and prodoct object 
$database = new Database();
$db = $database->getConnection();

//initialize object 
$user = new User($db);

$stmt = $user->read();

$user_arr = array();
$user_arr['records'] = array();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	extract($row);

	$user_item= array(
		"id" => $id,
		"nom" => $nom,
		"prenom" => $prenom,
		"adresse" => $adresse,
		"mail" => $mail,
		"telephone" => $telephone,
		"role" => $role,
		"type" => $type,
		"doctor" => $doctor,
		"patients" => $patients,
		"prescriptions" => $prescriptions
	);

	array_push($user_arr['records'], $user_item);
}


http_response_code(200);

echo json_encode($user_arr);

?>