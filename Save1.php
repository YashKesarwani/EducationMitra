<?php
 $thispage="register";
 include_once "Header.php";
?> 
 <title> Register</title> 
 <body>
<?php
   include "Connectionfile.php";
   if(isset($_POST["fname"]))	
    {
		$fnam=$_POST["fname"];
		$fname=filter_var($fnam,FILTER_SANITIZE_SPECIAL_CHARS);
		$lnam=$_POST["lname"];
		$lname=filter_var($lnam,FILTER_SANITIZE_SPECIAL_CHARS);
		$pass=sha1($_POST["pass"]);
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
		$inf=$obj->insert($fname,$lname,$pass,$email,$mob,$int,$course,$city);
		if($inf=="1")
		{
			echo "<center><h3><br>CONGRATS...!!!</h3>
			 <div>
				<img src=\"Pics/pics/happy.jpg\" width=30% height=30%><br>
				<h4>You are now a member of <b>EducationMitra.in</b><br><br>
				<h4>Login here and start exploring..<b>BE PREPARED..BE CONFIDENT..<br>
				<h3>Plan..Pursue..And Achieve !!<br><br>
			 </div></center>";
		}
		else
		{
			echo "<center><h3 style=\" color:red \">Sorry..!! Some Error Occured. We are fixing it.
			Register after some time.<br>
			<img src=\"Pics/pics/Sorry2.jpeg\" width=30% height=30%>";
		}
	}
	else
	{
	 header("Location:Register.php");
	}	
?>
</body>  
