<?php 
    include_once '../repositories/user.php';
    include_once '../repositories/faq.php';
    include_once '../repositories/contact-us.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="sylesheet" href="../css/homepage.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <title>Dashboard</title>
</head>
<body>
<?php 
        include "./header.php";
    ?>
<div class="dashboard">
    <div class="user-dashboard">
        <h2> All Users </h2>
        <?php
            $userRepository  = new UserRepository();
            $users = $userRepository->getAllUsers();
            foreach($users as $user){
            echo 
            "
            <form action='../controller/dashboardChange.php' method='POST' class='user'> 
            <div class='user-info'>
                <input name='id' type='text' value='$user[id]' readonly />
            </div>
            <div class='user-info'>
                <input name='name' type='text' value='$user[name]' />
            </div>
            <div class='user-info'>
                <input name='surname' type='text' value='$user[surname]' />
            </div>
            <div class='user-info'>
                <input name='email' type='text' value='$user[email]' />
            </div>
            <div class='user-info'>
                <input name='password' type='text' value='$user[password]' />
            </div>
            <div class='user-info'>
                <input type='text' value='$user[totalCalories]' readonly />
            </div>
            <div class='user-info'>
                <input type='text' value='$user[age]' readonly />
            </div>
            <div class='user-info'>
                <input type='text' value='$user[height]' readonly />
            </div>
            <div class='user-info'>
                <input type='text' value='$user[weight]' readonly />
            </div>
            <div class='user-info'>
                <input type='text' value='$user[gender]' readonly />
            </div>
                <button name='edit-user' type='submit'> Edit User </button>
                <button name='delete-user' type='submit'> Delete User</button>
            </form>
        ";
        }
        ?>
    </div>
    <div class="faq-dashboard">
        <h2> All FAQs </h2>
        <?php
            $faqRepository  = new FAQRepository();
            $faqs = $faqRepository->getAllFAQs();
            foreach($faqs as $faq){
            echo 
            "
            <form action='../controller/dashboardChange.php' method='POST' class='faq'> 
            <div class='faq-info'>
                <input name='id' type='text' value='$faq[faq_id]' readonly />
            </div>
            <div class='faq-info'>
                <input name='faq_question' type='text' value='$faq[faq_question]' />
            </div>
            <div class='faq-info'>
                <input name='faq_answer' type='text' value='$faq[faq_answer]' />
            </div>
            <button name='edit-faq' type='submit'> Edit FAQ </button>
            <button name='delete-faq' type='submit'> Delete FAQ</button>
            </form>
        ";
        }
        ?>
    
    </div>
    <div class="contactus-dashboard">
        <h2> All Conact Us Messages </h2>
        <?php
            $contactUsRepository  = new ContactUsRepository();
            $contactUsMessages = $contactUsRepository ->getAllMessages();
            foreach($contactUsMessages as $message){
            echo 
            "
            <form action='../controller/dashboardChange.php' method='POST' class='contact-us'> 
            <div class='contact-us-info'>
                <input name='id' type='text' value='$message[id]' readonly />
            </div>
            <div class='contact-us-info'>
                <input name='name' type='text' value='$message[name]' readonly />
            </div>
            <div class='contact-us-info'>
                <input name='email' type='text' value='$message[email]' readonly />
            </div>
            <div class='contact-us-info'>
                <input name='message' type='text' value='$message[message]' />
            </div>
            <button name='edit-message' type='submit'> Edit Message </button>
            <button name='delete-message' type='submit'> Delete Message </button>
            </form>
        ";
        }
        ?>
    </div>
</div>
    <?php 
     include "./footer.php";
    ?>
</body>
</html>