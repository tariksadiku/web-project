<?php
include_once '../db/dbConnection.php';

class ContactUsRepository {
    private $conn;

    function __construct()
    {
        $connection = new DBConn;
        $this->conn = $connection -> startConnection();
    }

    function insertMessage($name, $email, $message) {
        $conn = $this->conn;

        $sql = "INSERT INTO contactus (name, email, message) VALUES (?,?,?)";

        $statement = $conn->prepare($sql);

        $statement ->execute([$name, $email, $message]);
    }

    function getAllMessages(){
        $conn = $this->conn;

        $sql = "SELECT * FROM contactus";
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function updateMessage($id, $message) {
        $conn = $this->conn;
        $sql = "UPDATE contactus SET message=? where id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$message, $id]);
    }

    function deleteMessage($id){
        $conn = $this->conn;

        $sql = "DELETE FROM contactus WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
    }
}


?>