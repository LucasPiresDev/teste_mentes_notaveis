<?php
class db
{
    public $username = 'root';
    public $password = 'root';
    public $host     = 'localhost';
    public $dbname   = 'test';
     
    public function __contruct(){}

    
    public function connect(){

        try {
            $username = 'root';
            $password = 'root';
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
            return $pdo;
           
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}

    

  
  
?>