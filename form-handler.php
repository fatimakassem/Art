<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$email_from='fatimakassem342@gmail.com';
$email_subject='New Form Submission';
$email_body="User Name: $name.\n"."User Email: $visitor_email.\n"."Subject:$subject.\n"."User Message:$message.\n";

$to='fatimakassem342@gmail.com';
$headers="From:$email_from\r\n";
$headers .="reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");




$FileName=$_FILES['fuResume']['name'];
$TmpName=$_FILES['fuResume']['tmp_name'];

move_uploaded_file($TmpName,$FileName);
echo("File Uploaded Successfuly");


?>