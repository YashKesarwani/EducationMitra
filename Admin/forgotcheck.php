<?php
 session_start();
 include "mainhead.php";
?> 
 <title> Forgot Password </title>
 	
<?php
   include "Connect.php"; 
   if(isset($_POST["aname"]))
	{
		$aname=$_POST["aname"];
		$obj=new admin;
		$spf=$obj->check($aname);
		if($spf==-1)
		{
		 echo "<center><h3 style=\"color:red\">Invalid Admin</h3><br>
		 <img src='../Pics/pics/Sorry2.jpeg' width=30% height=30%></center>";
		}
		else 
		{
		 echo "<center><h3>A message will be soon sent to you at your Email ID..!!</h3><br>
		 <img src='../Pics/pics/happy.jpg' width=30% height=30%></center>";
		 $str=chr(rand(65,90)).chr(rand(65,90)).rand(1000,9999).chr(rand(65,90));
		 $pass=str_shuffle($str);
		}
    }
?>	
