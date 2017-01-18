<?php

//$target = "aspmx.l.google.com";
$target = "mailtrap.io";
$port = 25;
$errno = "";
$errstr = "";
$timeout = 30;
$newline = "\n\r";
$logArray = array();

$connect = fsockopen($target, $port, $errno, $errstr, $timeout);
$smtpResponse = fgets($connect, 4096);
if(empty($connect)) {
   $logArray["error"][] = "Failed to connect: $smtpResponse";
   var_dump($logArray);
   exit;
} else {
   $logArray['connection'][] = "Connected to: $smtpResponse";
}
//$newLine = "\n\r";
//fputs($connect, "HELO" . $newLine);
//$smtpResponse = fgets($connect, 4096);
//$logArray['connection'][] = "$smtpResponse";
var_dump($logArray);

//telnet://DVUKWDCWRLY001.dev.global.tesco.org:25