<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="../css/login.css" />
</head>
<body>
<?php 
    include "./header.php";
    ?>


    <form method="POST" action="../controller/loginController.php" class="login">
        <h1> Login </h1>

        <label for="email"> Email </label>

        <input name="email" class="loginEmail" type="email" placeholder="Email should be standard" />

        <label for="password"> Password </label>

        <input name="password" class="loginPassword" type="password" placeholder="Password should be more than 7 characters" />

        <button name='login' class="loginButton" type="submit"> Sign In </button>

    </form>

    <?php 
     include "./footer.php";
    ?>

    <!-- <script src="../scripts/login-register.js"></script> -->
</body>
</html>