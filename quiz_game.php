<?php 

include "models/model_quiz.php";

$user = new Quiz();



//verifica se esta tudo preenchido!
if(empty($_GET["id"])){
    
    include "error.php"; 

}else{
    //verifica se exite dados iguais na base dados
    $list = $user->getDataByCategory($_GET["id"]);
    
    if (empty($list)){

        include "error.php";

    }else{
        foreach ($list as $row) { 
            echo "<script>
                    var urlBase     = 'https://opentdb.com/api.php?';
                    var amount      = 'amount=".$row['questions']."';
                    var category    = '&category=".$row['id_category']."';
                    var difficulty  = '&difficulty=".$row['difficulty']."';
                    var type        = '&type=".$row['type']."';

                    var url         = urlBase + amount + category + difficulty + type;
                </script>";
        }

        include "assents/play_game.php";
    }
    
}

?>
