<?php

 include "../models/model_score.php";

$id = $_POST['ID'];

 if(!empty( $id ) ){

    $rank = new Score();

    $rankList = $rank->CheckRank($id);

    echo json_encode($rankList);

    
}else{
    echo '<script>alert("eerroorr");</script>';
}
?>  