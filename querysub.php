<?php
 session_start();
 $thispage="ask";
 include_once "Header.php";
?> 
 <title> Home</title>
   
 <body>
<?php
 $nam=$_POST["name"];
 $name=filter_var($nam,FILTER_SANITIZE_SPECIAL_CHARS);
 $mail=$_POST["email"];
 $email=filter_var($mail,FILTER_SANITIZE_EMAIL);
 $mobile=$_POST["contact"];
 $addr=$_POST["address"];
 $address=filter_var($addr,FILTER_SANITIZE_SPECIAL_CHARS);
 $que=$_POST["query"];
 $query=filter_var($que,FILTER_SANITIZE_SPECIAL_CHARS);
 
 $fp=fopen("Query.txt","a+");
	if(empty($fp))
	 {
		echo "Sorry..!! Not Found";
	 }
	else
	 {
		echo "<center><img src=Users/Upics/thankyou.jpg></center>";
		echo "<font color=\"black\" size=4>We Will Reply To You Soon</font><br>";
	 }  
	fwrite($fp,"$email, $mobile, $address, $name:- $query\r\n\n\n");
	
?>	