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
$medecines = new Medecines($db);

//TODO implémenter la création d'un médicament
// $medecines.create()

?>