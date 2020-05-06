<?php
include 'conn.php';

class Score{

    private $conn=null;
	  
    function __construct() {
        $db=new BaseDados();
		$this->conn = $db->connection();
    }

    public function CheckRank($id){
        $list = [];
		$stmt = $this->conn->prepare("SELECT score_username, score_quiz_id, score_number, score_timer FROM `rxz_score` WHERE score_quiz_id = '$id' ORDER BY score_number DESC, score_timer ASC LIMIT 15");
        $stmt->execute(); 
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach($rows as $row) {
            $list[] = 
            array(
                "username"          => $row['score_username'], 
                "category"          => $row['score_quiz_id'], 
                "question_correct"  => $row['score_number'], 
                "timer"             => $row['score_timer'], 
            );
        }
        $stmt = null;
        $this->conn = null;
        return $list; }
}
?>