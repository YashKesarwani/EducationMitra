<?php
 session_start();
?> 
<title>Login</title>
<?php
   include "Connectionfile.php"; 
   if(isset($_POST["uid"]))
	{
	  if(!(ctype_digit($_POST["uid"])))
	  {
	    echo "Sorry..!! Please enter correct user id."   ;
	  }
	  else
	  {
		$uid=$_POST["uid"];
	    $pass=$_POST["pass"];
		$obj=new register;
		$spf=$obj->select($uid,$pass);
		if($spf==-1)
		{
		 $thispage="login";
		 include "header.php";
		 echo "<center><h3 style=\"color:red\">Invalid User ID or password</h3>
		   <img src=Pics/pics/Sorry2.jpeg width=30% height=30%></center>";
		}
		else 
		{
		 if(isset($_POST["rem"]))
		 {
		  setcookie("cook", $uid, time()+86400);
		 }
		 $_SESSION["userid"]=$uid;
		 header("Location:Users/intro.php?id=$uid");	
		}
	  }	
	}
	else
	 {
	   header("Location:Login.php");
	 }
	
?>	