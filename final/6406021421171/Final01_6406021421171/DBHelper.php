<?php
    Class DBHelper{
    protected $conn = null;
    protected $host = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "employee";

    public function __construct(){
      try{
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",
        $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }catch(PDOException $e){
        echo "Connection Failed:", $e->getMessage();
      }
    }
    }
?>