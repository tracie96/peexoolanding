<?php
$to = 'tracyamara07@gmail.com';
$subject = "Beautiful HTML Email using PHP by CodexWorld";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: tracy@peexoo.ai>' . "\r\n";
$htmlContent = file_get_contents("index.html");
if(mail($to,$subject,$htmlContent,$headers)):
    $successMsg = 'Email has sent successfully.';
else:
    $errorMsg = 'Email sending fail.';
endif;
// echo include("index.php");
?>