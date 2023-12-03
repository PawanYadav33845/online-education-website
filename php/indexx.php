<?php


$fname= $_POST['fname'];
$lname= $_POST['lname'];
$message= $_POST['message'];
$addmessage= $_POST['addmessage']
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

$host="localhost";;
$db="contactus";
$user="root";
$password=" ";
$conn = mysqli_connect(hostname: $host, username:$user, password:$password, database:)
if (myqli_connect_errno()){
    die("Connection error..". mysqli_connect_errno());
}

$sql = "INSERT INTO message (fname,lname,message,addmessage) VALUES ($fname,$lname,$message,$addmessage)";
?>