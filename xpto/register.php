<?php
    include "../models/model_user.php";

    $user = new User();

    $email  = $_POST['r_email'];
    $pass   = $_POST['r_pass'];//password_hash($_POST['r_pass'], PASSWORD_DEFAULT);
    $name   = $_POST['r_name'];

    //verifica se esta tudo preenchido!
    if(empty($email) || empty($pass) || empty($name)){

        $data_register = false;

    }else{
        //verifica se exite dados iguais na base dados
        $verify = $user->VerifyNameExiste($name);
        
        if($verify == false){

            //verifica se o registo foi completado com sucesso
            $register = $user->Register($email, $pass, $name);
            
            $data_register = $register;

        }else{
            $data_register = false;
        }
        
    }

    print_r($data_register);

?>  