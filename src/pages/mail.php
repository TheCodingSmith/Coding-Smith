<?php
    $errors = [];

    if (empty($_POST['name'])) {
        $errors[] = 'No name provided';
    }

    if (empty($_POST['email'])) {
        $errors[] = 'No email provided';
    }

    if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email format wrong';
    }

    if (empty($_POST['website'])) {
        $errors[] = 'No website provided';
    }

    if (empty($_POST['service'])) {
        $errors[] = 'No service provided';
    }

    if (empty($_POST['message'])) {
        $errors[] = 'No message provided';
    }

    if (count($errors)) {
        print_r($errors); // Or return to previous window with errors
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'coding.r.smith@gmail.com';
$email_subject = "Website Contact Form SRC:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: coding.r.smith@gmail.comm\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
