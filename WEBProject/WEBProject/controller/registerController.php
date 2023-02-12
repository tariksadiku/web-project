<?php

include_once "../repositories/user.php";
include_once "../models/user.php";

session_start();

if (isset($_POST['registerButton'])) {
    try {

    $id = rand(100,999);
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new User($id, $name, $surname, $email, $password);

    $userRepository = new UserRepository();
    $userRepository->insertUser($user);

    header("Location: http://localhost/WEBProject/html/index.php");

    $_SESSION['userID'] = $id;
    $_SESSION['userName'] = $name;

    } catch (PDOException $e) {
        echo $e;
    }

}
?>