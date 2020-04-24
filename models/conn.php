<?php
class BaseDados{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "beraquiz";

    public function connection(){
        try {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $this->conn = new PDO('mysql:host='.$this->servername.';dbname='.$this->dbname, $this->username, $this->password);
            return $this->conn;
        }
        catch(PDOException $e){
            return "Connection failed: " . $e->getMessage();
        }

        
    }
}
?>
