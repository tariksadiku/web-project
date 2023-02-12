<?php
    if(session_status() !== PHP_SESSION_ACTIVE) session_start();
    include_once "../repositories/user.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="../css/homepage.css" />

</head>
<body>
    <header class="header">
        <div class="header_logo">
            <a href="#"><img src="../images/healthylogo.webp" alt="" /> </a>
        </div>
        <ul class="header_links">
            <li><a href="./index.php">Home</a> </li>
            <li><a href="./calculator.php">Calculator</a> </li>
            <li><a href="./faq.php">FAQs</a> </li>
            <?php 

                if (isset($_SESSION['userID'])) {
                    $id = $_SESSION['userID'];
                    $userRepository = new UserRepository();

                    $user = $userRepository->getUserById($id);
                    if ($user) {
                        $userTdee = $user['totalCalories'];

                        if (isset($userTdee) && $userTdee > 0) {
                            echo '<li><a href="./tdeeResults.php"> TDEE Results </a> </li>';
                        } else {
                            echo '<li><a href="./tdeeCalculator.php"> TDEE Calculator </a> </li>';

                        }
                    }
                } else {
                    echo '<li><a href="./tdeeCalculator.php"> TDEE Calculator </a> </li>';
                }

            ?>
            <li><a href="./contactus.php">Contact Us</a> </li>
        </ul>        

        <?php 
            if (isset($_SESSION['userName'])) {
                echo '<a href="../controller/logoutController.php">Logout</a>';
            } else {
                echo '<div class="account_information"><a class="logInButton" href="./login.php"> Log In </a><a class="registerButton" href="./register.php"> Register </a></div>';
            }
        ?>
    </header>
</body>
</html>