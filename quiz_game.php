<?php 

include "models/model_quiz.php";

$user = new Quiz();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/quiz_game.css">
        <title>Bera Quiz - Quiz game</title>
    </head>
    <body>

        <div class="caja">3</div>


        <?php
            //verifica se esta tudo preenchido!
            if(empty($_GET["id"])){
                
                header('Location: error.php');

            }else{
                //verifica se exite dados iguais na base dados
                $url = $user->getDataByCategory($_GET["id"]);
                
                //caso nao exista dados
                if (empty($url)){

                    header('Location: error.php');

                }else{
                    foreach ($url as $row) { 
                        $id         = $row['id_category'];
                        $difficulty = $row['difficulty'];
                        $nameQuiz   = $row['category'];

                        echo "<script>
                                var urlBase     = 'https://opentdb.com/api.php?';
                                var amount      = 'amount=".$row['questions']."';
                                var category    = '&category=".$id."';
                                var difficulty  = '&difficulty=".$difficulty."';
                                var type        = '&type=".$row['type']."';

                                var url         = urlBase + amount + category + difficulty + type;
                            </script>";

                            
                    }

                    //verifica qual página deve carregar
                    if ($difficulty == "easy"){

                        include "assents/quiz_easy.php";

                    }else if ($difficulty == "medium"){

                        include "assents/quiz_medium.php";

                    }elseif ($difficulty == "hard"){

                        include "assents/quiz_hard.php";

                    }else{

                        header('Location: error.php');
                    }
                }
                
            }
        ?>
        
        <div id="popUpEnd">

            <h1 id="finalScorePopUpText"></h1>

            <h1 id="idTimerFinalCount"></h1>

            <a onclick="refresh()" class="btn-first"> LET`S PLAY AGAIN </a>

            <a href="index.php" class="btn-secound"> GO BACK TO MENU </a>

        </div>

        <div class="bg" style="transform: none;"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenLite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSPlugin.min.js"></script>
        <script src="js/quiz_game.js" async defer></script>
    </body>
</html>