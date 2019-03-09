<link href="../bootstrap.min.css" rel="stylesheet">
<link href="style1.css" rel="stylesheet">
<?php
   include "../Connectionfile.php";
   $uid=$_GET["id"];
   $obj=new checkpass;
   $check=$obj->checkp($uid);
   if(isset($_POST["fname"]))	
    {
	  if(sha1($_POST["pass"])==$check)
	   {
		$fnam=$_POST["fname"];
		$fname=filter_var($fnam,FILTER_SANITIZE_SPECIAL_CHARS);
		$lnam=$_POST["lname"];
		$lname=filter_var($lnam,FILTER_SANITIZE_SPECIAL_CHARS);
		$pass=sha1($_POST["npass"]);
		/*if(!(filter_var($_POST["mail"],FILTER_VALIDATE_EMAIL)))
		{echo "Sorry..!!";}*/
		$mail=$_POST["mail"];
		$email=filter_var($mail,FILTER_SANITIZE_EMAIL);
		$mob=$_POST["mobile"];
		$inte=$_POST["interest"];
		$int=filter_var($inte,FILTER_SANITIZE_SPECIAL_CHARS);
		$cour=$_POST["course"];
		$course=filter_var($cour,FILTER_SANITIZE_SPECIAL_CHARS);
		$cit=$_POST["city"];
		$city=filter_var($cit,FILTER_SANITIZE_SPECIAL_CHARS);
		$obj=new register;
		$upf=$obj->update($uid,$fname,$lname,$pass,$email,$mob,$int,$course,$city);
		if($upf=="1")
		{
			echo "<center><h3>Your values are updated..!!</h3></center>";
		}
		else
		{
			echo "Sorry..!!";
		}
	   }	
	  else
	   {
	    echo "<center><h3>Sorry..!! You Entered Wrong Old Password</h3></center>" ;
	   }	
	}
	else
	{
	 header("Location:../Register.php");
	}
	
?>
<br><br>
   <center><button class="btn btn-warning"><a href="Profile.php?id=<?php echo $uid; ?>" style="color:white">>>>BACK</a></button></center>
<?php
 include "Footer.php";
?> 