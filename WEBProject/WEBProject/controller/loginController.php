<?php

include_once "../repositories/user.php";
include_once "../models/user.php";

session_start();

if (isset($_POST['login'])) {
    try {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $userRepository = new UserRepository();
    $user = $userRepository->getUserByEmail($email);

    $_SESSION['userID'] = $user['id'];
    $_SESSION['userName'] = $user['name'];

    header("Location: ../html/index.php");


    } catch (PDOException $e) {
        echo $e;
    }

}
?>  