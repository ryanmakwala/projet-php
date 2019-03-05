<?php
class Database{
 
    // specify your own database credentials
    private $options = [];
    private $host = "localhost";
    private $db_name = "gsb";
    private $charset = "utf8";
    private $username = "root";
    private $password = "";
    public $conn;
 
    // get the database connection
    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO ("mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=" . $this->charset, $this->username);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>