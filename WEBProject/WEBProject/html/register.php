<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css" />
</head>
<body>

    <header class="header">
        <div class="header_logo">
            <a href="#"><img src="../images/healthylogo.webp" alt="" /> </a>
        </div>
        <ul class="header_links">
            <li><a href="./index.html">Home</a> </li>
            <li><a href="./calculator.html">Calculator</a> </li>
            <li><a href="./faq.html">FAQs</a> </li>
        </ul>

        <a class="logInButton" href="./login.html"> Log In </a>
    </header>


    <form method="POST" action="<?=$_SERVER['PHP_SELF']?>" class="login">
        <h1> Create Account </h1>

        <label for="name"> Name </label>

        <input name="name" class="loginName" type="text" placeholder="Name should be more than 7 characters" />

        <label for="surname"> Surname </label>

        <input name="surname" class="loginSurname" type="text" placeholder="Name should be more than 7 characters" />

        <label for="email"> Email </label>

        <input name="email" class="loginEmail" type="email" placeholder="Email should be standard" />

        <label for="password"> Password </label>

        <input name="password" class="loginPassword" type="password" placeholder="Password should be more than 7 characters" />

        <button name="registerButton" class="registerButton" type="submit"> Create Account </button>
    </form>

    <?php 
     include "./footer.php";
    ?>

    <!-- <script src="../scripts/login-register.js"></script> -->

    <?php include_once "../controller/registerController.php" ?>
</body>
</html>