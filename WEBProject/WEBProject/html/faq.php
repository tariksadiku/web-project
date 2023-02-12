<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <link rel="stylesheet" href="../css/faq.css" />
</head>
<body>

    <?php 
        include "./header.php";
    ?>


    <section class="FAQ">
        <h1>FAQs</h1>

        <?php
        include_once '../repositories/faq.php';
        $userRepository  = new FAQRepository();
        $faqs = $userRepository->getAllFAQs();
        foreach($faqs as $faq){
           echo 
           "
           <button class='accordion'> $faq[faq_question] </button>
           <div class='panel'>
            <p> $faq[faq_answer] </p>
           </div>
           ";
        }
        ?>
    </section>
    <?php 
     include "./footer.php";
    ?>
    <script src="../scripts/faq.js"></script>
</body>
</html>