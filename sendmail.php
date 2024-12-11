<?php

require_once('includes/connect.php');

$email = $_POST['email'];

$errors = [];

//validate and clean these values

$email = trim($email);



if(empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}

if(empty($errors)) {

    //insert these values as a new row in the contacts table

    $query = "INSERT INTO contact (email) VALUES('.$email.')";

    if(mysqli_query($connect, $query)) {

//format and send these values in an email

$to = 'rhaaf@fanshawec.ca';
$subject = 'Message from your Portfolio site!';

$message = "You have received a new contact form submission:\n\n";
$message .= "Email: ".$email."\n\n";
//build out rest of message body...

mail($to,$subject,$message);

header('Location: index.php');
    } else {
        echo 'Database insertion failed!';
    }

}else{
    foreach ($errors as $error) {
        echo $error . '<br>';
    }
    }










?>