<?php
if(isset($_POST['submit']))

{
$email_to = "info@alfarusiagroup.com";

//$email_to_2 = "";
 	
$email_from = $_POST['email'];

$email_subject = "Enquiry from alfarusiagroup.com website.";

$name=$_POST['name'];

$phone=$_POST['telephone'];

$subject=$_POST['subject'];

$message=$_POST['message'];

$msg="Name:".$name."\r\n"."Phone:".$phone."\r\n"."E-mail:".$email_from."\r\n"."Subject:".$subject."\r\n"."Message:".$message;

$headers = 'From: '.$email_from."\r\n".'Reply-To: '.$email_from."\r\n" .'X-Mailer: PHP/' . phpversion();

mail($email_to, $email_subject, $msg, $headers); 

//mail($email_to_2, $email_subject, $msg, $headers); 
}
header("location:contact.php?=success");
?>