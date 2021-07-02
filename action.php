<?php
if (isset($_POST['submit'])) {
    $recipient="yourmailid@domain.com"; //Enter your mail address
    $subject="Contact from Website"; //Subject 
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["comment"];
    $mailBody="Name: $sender\nEmail Address: $senderEmail\n\nMessage: $message";
    mail($recipient, $subject, $mailBody);
    header("Location:contact.html"); // Set here redirect page or destination page
}
?>