<?php
    $name = $_POST['firstname'];
    $name = $_POST['lastname'];
    $name = $_POST['email'];
    $name = $_POST['message'];
?>

<?php
    $email_from = "$email";
    $email_subject = "New Form Submission";
    $email_body = "You have received a new message from the user $firstname $lastname. \n"
    "Here is the message: \n $message"
?>

<?php
    $to = "aminaelashry2@gmail.com";
    $headers = "From: $email_from \r\n";
    mail($to,$email_subject,$email_body,$headers);
?>