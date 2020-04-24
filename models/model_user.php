<?php
include 'conn.php';

class User{

    private $conn=null;
	  
    function __construct() {
        $db=new basedados();
		$this->conn = $db->connection();
    }
    
    public function Autentication($email, $pass){
        $stmt = $this->conn->prepare("SELECT user_name, user_pass FROM rxz_users WHERE user_name = :user_name AND user_pass = :user_pass");
        $stmt->bindParam(':user_name', $email);
        $stmt->bindParam(':user_pass', $pass);
        $stmt->execute();
        $utilizador = $stmt->fetch();

        if ($utilizador && password_verify($_POST['pass'], $utilizador['pass'])){
            return true;
        }else{
            return false;
        }
    }

    public function Register($email, $pass, $name){
        try {
            $stmt = $this->conn->prepare("INSERT INTO rxz_users (user_email, user_pass, user_name) VALUES ('$id','$email','$pass','$name')");
            $stmt->execute();
            return true;
        }   
        catch(PDOException $e) {
           return false;
        }
    }

    public function VerifyNameExiste($name){
        $stmt = $this->conn->prepare("SELECT user_name FROM rxz_users WHERE user_name = :user_name");
        $stmt->bindParam(':user_name', $name);
        $stmt->execute();
        $obj = $stmt->fetchObject();
        if($obj){
            return false;
        }else{
            return true;
        }
    }
}
?>