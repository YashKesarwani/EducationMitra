<?php
 session_start();
 $thispage="login";
 include_once "Header.php";
?> 
 <title> Forgot Password </title>
	
 <center>
 <div id="login" style="font-size:17px; height:250px;">
 
	<div id="d7" style="background-color:orange; color:white; font-size:19px; text-align:center">
	   Forgot Password
	</div>
	<div id="d13">

			<form method="post" action="forgotcheck.php" enctype="multipart/form-data">

				<input type="text" name="uid" placeholder="Enter User ID" required class="form-control">
				<br>
				
				<button class="btn btn-info"> Submit </button>
			</form>
   </div> 	
 </div>
 </center>
 
<?php
 include "Footer.php";
?>   