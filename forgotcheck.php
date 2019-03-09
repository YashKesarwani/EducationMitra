<?php
 session_start();
 $thispage="login";
 include_once "Header.php";
?> 
 <title> Forgot Password </title>
	
<?php
   include "Connectionfile.php"; 
   if(isset($_POST["uid"]))
	{
		$uid=$_POST["uid"];
		$obj=new register;
		$spf=$obj->check($uid);
		if($spf==-1)
		{
		 echo "<center><h3 style=\"color:red\">Invalid User ID</h3><br>
		 <img src='Pics/pics/Sorry2.jpeg' width=30% height=30%></center>";
		}
		else 
		{
		 echo "<center><h3>A message will be soon sent to you..!!</h3><br>
		 <img src='Pics/pics/happy.jpg' width=30% height=30%></center>";
		 $str=chr(rand(65,90)).chr(rand(65,90)).rand(1000,9999).chr(rand(65,90));
		 $pass=str_shuffle($str);
		}
    }
?>	
