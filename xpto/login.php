<?php
    include "../models/model_user.php";

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (empty($pass) || empty($email)){
        
        $data = false;

    }else{

        session_start();

        $user = new User();


        $autentication = $user->Autentication($email, $pass);

        if($autentication == true){
            $_SESSION['email'] = $email;
            $data = true;
        }else{
            $data = false;
        }

    }

    print_r($data);
?>  