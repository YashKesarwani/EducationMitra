<?php
session_start();
$thispage="home";
include_once "Header.php";
$feed=$_POST["feed"];
$name=$_POST["name"];
$fp=fopen("Feeds.txt","a+");
fwrite($fp,"$name:- $feed\r\n");								
fclose($fp);
?>	
<title> Feedback </title>
<center>
	<h2>Thank You For Giving Your Feedback<br></h2>
	<img src="Pics/pics/thankyou.jpg">
</center>