<?php
 class Medecines {

 	// database connection and table name 
 	private $conn;
 	private $table_name = "Medecines";

 	//object properties
 	public $id;
 	public $nom;
 	public $description;
 	public $prix;
 	
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