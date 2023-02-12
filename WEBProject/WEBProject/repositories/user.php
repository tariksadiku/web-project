<?php
include '../db/dbConnection.php';

class UserRepository {
    private $conn;

    function __construct()
    {
        $connection = new DBConn;
        $this->conn = $connection -> startConnection();
    }

    function insertUser($user) {
        $conn = $this->conn;

        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $sql = "INSERT INTO user (id,name,surname,password, email) VALUES (?,?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement ->execute([$id, $name, $surname, $password, $email]);

        echo "<script> alert('User has been inserted successfuly!') </script>";
    }

    function getAllUsers(){
        $conn = $this->conn;

        $sql = "SELECT * FROM user";
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function updateTDEE($id, $TDEE, $age, $height, $weight, $gender) {
        $conn = $this->conn;
        $sql = "UPDATE user SET totalCalories=?, age=?, height=?, weight=?, gender=? where id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$TDEE, $age, $height, $weight, $gender, $id]);
    }

    function getUserById($id){
        $conn = $this->conn;
  
        $sql = "SELECT * FROM user WHERE id='$id'";
        $statement=$conn->query($sql);
        $user = $statement->fetch();
  
        return $user;
    }

    function getUserByEmail($email){
        $conn = $this->conn;
  
        $sql = "SELECT * FROM user WHERE email='$email'";
        $statement=$conn->query($sql);
        $user = $statement->fetch();
  
        return $user;
    }

    function updateUser($name,$surname,$email,$password, $id){
        $conn = $this->conn;

        $sql = "UPDATE user SET name=?,surname=?,email=?,password=? where id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$surname,$email,$password, $id]);
        echo "<script> alert('User has been updated successfuly!') </script>";
    }

    function deleteUserById($id){
        $conn = $this->conn;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('User has been deleted successfuly!') </script>";
    }
}


?>