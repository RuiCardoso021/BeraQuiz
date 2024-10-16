<?php

    session_start();

    if(empty($_SESSION["user"]))
    {
        session_unset();
        session_destroy();
    }else{
        echo $_SESSION["user"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
    <link rel="stylesheet" href="css/main.css">
    <title>BeraQuiz</title>
</head>
<body>
    <!--HEADER-->
    <?php   include "assents/menu.php";   ?>


    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    
    <div class="container-fluid body-index">
        <div class="row row-bug">

                <!--MAIN-MENMU-->
                <?php   include "assents/main-menu.php";    ?>

                <!--HOME PAGE-->
                <?php   include "assents/home.php";    ?>

               
            
        </div>
    </div>
    

    <div class="bg" style="transform: none;"></div>
    <!-- bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/main.js" async defer></script>
</body>
</html>