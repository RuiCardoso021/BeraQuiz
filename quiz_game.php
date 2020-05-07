<?php 

include "models/model_quiz.php";

$user = new Quiz();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assents/css/quiz.css">
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
                        echo "<script>
                                var urlBase     = 'https://opentdb.com/api.php?';
                                var amount      = 'amount=".$row['questions']."';
                                var category    = '&category=".$row['id_category']."';
                                var difficulty  = '&difficulty=".$row['difficulty']."';
                                var type        = '&type=".$row['type']."';

                                var url         = urlBase + amount + category + difficulty + type;
                            </script>";

                            $difficulty = $row['difficulty'];
                            $nameQuiz = $row['category'];
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
        


        <div class="bg" style="transform: none;"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenLite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSPlugin.min.js"></script>
        <script src="assents/js/quiz.js" async defer></script>
    </body>
</html>