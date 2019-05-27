<?php

//required headers
header("Access-Control-Allow-Origin:*");
header("Content-Type: application/json; charset=utf8");

//include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';

//instantiate database and product object 
$database = new Database();
$db = $database->getConnection();

//initialize object 
$user = new User($db);

$body = json_decode(file_get_contents('php://input'), true);

$user_created = $user->create($body);

http_response_code(200);

echo json_encode($user_created);

?>