<?php

//print_r($_POST);

$to      = 'info@house-happy.com.ua';
$subject = 'Форма обратной связи';

$message .= $_POST['name']. "\r\n";
$message .= $_POST['email']. "\r\n";
$message .= $_POST['message']. "\r\n";

$headers = 'From: happy-wp.smarto.com.ua' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
    echo '1';
}
else{
    echo 'Fail!';
}
?>