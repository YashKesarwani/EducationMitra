<?php
 session_start(); 
 if(isset($_POST["aname"]))
 {
	$name=$_POST["aname"];
	$pass=sha1($_POST["apass"]);

	$con=mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db");
	$cmd="select * from admin where aname='$name' and  apass='$pass'";
	$rst=mysqli_query($con,$cmd);
	$row=mysqli_fetch_array($rst);
	if($row==0)
	{
		echo "Invalid user" ;
	}
	else 
	{
		$_SESSION["admin"]=$name;
		header("Location:Admhome.php?name=$name");
	}
 }		
 else
 {
	header("Location:index.php");
 }	
?>

