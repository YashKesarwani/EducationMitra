<?php
session_start();
if(isset($_COOKIE["cook"]))
{
$_SESSION["userid"]=$_COOKIE["cook"];
header("Location:Users/intro.php");	
}
 $thispage="login";
 include_once "Header.php";
?> 
 <title> Login </title>
 <center>
 <div id="login" style="font-size:17px">
 
	<div id="d7" style="background-color:orange; color:white; font-size:19px; text-align:center">
	   Login
	</div>
	<div id="d13">

			<form method="post" action="Save2.php" enctype="multipart/form-data">

				<input type="text" name="uid" placeholder="Enter User ID" required class="form-control">
				<br>
				<input type="password" name="pass" placeholder="Enter Password" required class="form-control">
				<br>
				Remember Me  <input type="checkbox" name="rem">
				<h6><a href="forgot.php" style="color:blue;">Forgot Password?</a></h6>
				<button class="btn btn-info"> Login </button>
			</form>
			<form action="Register.php" form method="GET">
				<h6>Don't have an account?</h6>
                <button class="btn btn-warning">Signup</button> 
			</form>
   </div> 	
 </div>
 </center>
 
<?php
 include "Footer.php";
?>   