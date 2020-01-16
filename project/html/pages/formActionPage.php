
<?php

if($_POST['submit']) {
    $recipient='aminaelashry2@gmail.com';
    $subject=$_POST['subject'];
    $name=$_POST['name'];
    $senderEmail=$_POST['email'];
    $message=$_POST['message'];

    $mailBody="Name: $name\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody);

    $thankYou="<message>Thank you! Your message has been sent. I will reply in two to three business days!</message>";
}

?>

