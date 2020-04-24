<?php
    include "../models/model_user.php";

    $user = new User();

    $email  = $_POST['r_email'];
    $pass   = password_hash($_POST['r_pass'], PASSWORD_DEFAULT);
    $name   = $_POST['r_name'];

    //verifica se esta tudo preenchido!
    if(empty($email) || empty($pass) || empty($name)){

        $data = false;

    }else{

        $verify = $user->VerifyNameExiste($name);

        //verifica se exite dados iguais na base dados
        if($verify == true){

            $register = $user->Register($email, $pass, $name);

            //verifica se o registo foi completado com sucesso
            if($register == true){
                $data = true;
            }else{
                $data = false;
            }
        }else{
            $data = false;
        }
        
    }

    print_r($data);

?>  