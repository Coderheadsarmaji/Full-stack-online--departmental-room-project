<?php
$message=$_post['message'];

$email_from="";
$email_subject='New suggestion';
$email_body="User message:$message .\n";

$to='calunivregn@gmail.com';
$headers="from:email_from\r\n";

mail($to, $email_subject,$email_body ,$headers);

/*$message=$_POST['message'];
$to="sarmasumita0@gmail.com";
$email_subject='New suggestion';
$email_body="User message:$message .\n";
mail($to, $email_subject,$email_body);
echo "<script type='text/javascript> alert('Sent successfully.'); window.location='cs.php'; </script>";*/

?>