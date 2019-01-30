<?php 
class Database{
    //properties
    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $database = "test_oop";

    //public $conn;内に __construct()で生成された$this->connが収納される
    public $conn;

    public function __construct(){
        //注意new mysqli
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database);

        //check coennection
        if($this->conn->connect_error){
            die("Connection error: ".$this->conn->connect_error);
        }
        return $this->conn;
    }
}
?>