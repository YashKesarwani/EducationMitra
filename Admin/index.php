<?php
 session_start();
 include "mainhead.php";
?> 
 <title> Admin Panel </title>
 
 <body>
 <center>
 <div id="admlogin" style="font-size:19px">
	<div id="adm3" style="background-color:#8CDFDD; color:black; font-size:20px; text-align:center">
	   Admin Panel
	</div>
	<div id="adm5">
			<form method="post" action="Adminlogin.php" enctype="multipart/form-data">

				<input type="text" name="aname" placeholder="Enter Name" required class="form-control">
				<br>
				<input type="password" name="apass" placeholder="Enter Password" required class="form-control">
				<br>
				<h5><a href="forgot.php">Forgot Password?</a></h5>
				<button class="btn btn-info"> Login </button>
			</form>
    </div> 	
 </div>
 </center>
 </body>
<?php
 include "Footeradm.php";
?>   