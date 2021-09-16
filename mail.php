<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$number= $_POST['mobile'];
$to = "sollybabs@gmail.com";
$subject = "Mail From sollytolet";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
"\r\n Number =" . $mobile number = " .$number;
$headers = "From: noreply@sollytolet.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>