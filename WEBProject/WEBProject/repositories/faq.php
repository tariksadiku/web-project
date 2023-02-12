<?php
include_once '../db/dbConnection.php';

class FAQRepository {
    private $conn;

    function __construct()
    {
        $connection = new DBConn;
        $this->conn = $connection -> startConnection();
    }


    function getAllFAQs(){
        $conn = $this->conn;

        $sql = "SELECT * FROM faq";
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function updateFAQ($id, $question, $answer) {
        $conn = $this->conn;
        $sql = "UPDATE faq SET faq_question=?, faq_answer=? where faq_id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$question, $answer, $id]);
    }

    function deleteFAQ($id){
        $conn = $this->conn;

        $sql = "DELETE FROM faq WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
    }
}


?>