<?php
 class LatestPrescriptions {

 	// database connection and table name 
 	private $conn;
 	private $table_name = "latestprescriptions";

	 //object properties
	 public $id;
     public $date;
     public $patient;
	 public $doctor;
	 public $medecine;
 	

 	//constructor with $db as database connection 
 	public function __construct($db){
 		$this->conn = $db;
 	}

 	function read(){
 		$query = "SELECT * FROM " . $this->table_name; 

	 	// prepare query statement 
	 	$stmt = $this->conn->prepare($query);

	 	// execute query 
	 	$stmt->execute();

	 	return $stmt;
	 }
	 
	 
 }