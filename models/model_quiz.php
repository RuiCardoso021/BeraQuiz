<?php
include 'conn.php';

class Quiz{

    private $conn=null;
	  
    function __construct() {
        $db=new BaseDados();
        $this->conn = $db->connection();
    }

    //todos os quiz
    public function getEverthingData(){ 
        $list = [];
		$stmt = $this->conn->prepare("SELECT quiz_id, quiz_category, quiz_difficulty, quiz_questions_number, quiz_type FROM rxz_quiz");
        $stmt->execute(); 
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach($rows as $row) {
            $list[] = 
            array(
                "id"            => $row['quiz_id'], 
                "category"      => $row['quiz_category'], 
                "difficulty"    => $row['quiz_difficulty'], 
                "questions"     => $row['quiz_questions_number'], 
                "type"          => $row['quiz_type'], 
            );
        }
        $stmt = null;
        $this->conn = null;
        return $list; }


    //somente uma category
    public function getDataByCategory($id){
        $list = [];
        $stmt = $this->conn->prepare("SELECT quiz_category, quiz_difficulty, quiz_questions_number, quiz_type, quiz_category_number FROM rxz_quiz WHERE quiz_id = '$id'");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($rows as $row) {
            $list[] = array(
                "category"      => $row['quiz_category'], 
                "difficulty"    => $row['quiz_difficulty'], 
                "questions"     => $row['quiz_questions_number'], 
                "type"          => $row['quiz_type'], 
                "id_category"   => $row['quiz_category_number'], 
            );
        }
        $stmt = null;
        $this->conn = null;
        return $list; }



}

?>