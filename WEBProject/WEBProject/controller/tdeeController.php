<?php

include_once "../repositories/user.php";
include_once "../models/user.php";


if(isset($_POST['calculateTDEE'])) {
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $gender = $_POST['gender'];
    $tdee;

    if ($gender === 'Male') {
        $tdee = (10 * $weight) + (6.25 * $height) - (5.0 * $age) + 5; 
    } else {
        $tdee = (10 * $weight) + (6.25 * $height) - (5.0 * $age) + (-151); 
    }

    $userRepository = new UserRepository();
    $id = $_SESSION['userID'];

    echo $id;

    $userRepository->updateTDEE($id, $tdee, $age, $height, $weight, $gender);
    
    header('tdeeResults.php');
}
?>