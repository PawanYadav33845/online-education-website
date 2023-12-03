<?php


$name= $_POST['name'];
$message= $_POST['message'];
$to = "pawanwork456@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: pawanyadav33845@gmail.com" . "\r\n" .
print_r($_POST);
"CC: bhartiyacricketsangh@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
//header("Location:thankyou.html");
?>