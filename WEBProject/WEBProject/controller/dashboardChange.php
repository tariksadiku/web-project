<?php 

include_once '../repositories/user.php';
include_once '../repositories/faq.php';
include_once '../repositories/contact-us.php';

if (isset($_POST['edit-message']) || isset($_POST['delete-message'])) {

    $contactUsRepository = new ContactUsRepository();
    $userId = $_POST['id'];
    $userMessage = $_POST['message'];

    if (isset($_POST['edit-message'])) {
        $contactUsRepository->updateMessage($userId, $userMessage);        
    } else {
        $contactUsRepository->deleteMessage($userId);        

    }

    header('Location: http://localhost/WEBProject/html/dashboard.php');


}

if (isset($_POST['edit-faq']) || isset($_POST['delete-faq'])) {

    $faqRepository = new FAQRepository();
    $faqId = $_POST['id'];
    $faqQuestion = $_POST['faq_question'];
    $faqAnswer = $_POST['faq_answer'];

    if (isset($_POST['edit-faq'])) {
        $faqRepository->updateFAQ($faqId, $faqQuestion, $faqAnswer);        
    } else {
        $faqRepository->deleteFAQ($faqId);        

    }

    header('Location: http://localhost/WEBProject/html/dashboard.php');

}

if (isset($_POST['edit-user']) || isset($_POST['delete-user'])) {

    $userRepository = new UserRepository();
    $userId = $_POST['id'];
    $userName = $_POST['name'];
    $userSurname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_POST['edit-user'])) {
        $userRepository->updateUser($userName, $userSurname, $email, $password, $userId);  
    } else {
        $userRepository->deleteUserById($userId);        

    }

    header('Location: http://localhost/WEBProject/html/dashboard.php');

}


?>