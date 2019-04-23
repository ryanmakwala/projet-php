<?php
 class User {

 	// database connection and table name 
 	private $conn;
 	private $table_name = "user";

 	//object properties
 	public $id;
 	public $nom;
 	public $prenom;
 	public $adresse;
 	public $mail;
 	public $telephone;
 	public $role;
 	public $type;
 	public $doctor;
 	public $patients;
 	public $prescriptions;

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
