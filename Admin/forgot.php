<?php
 session_start();
 include "mainhead.php";
?> 
 
 <center>
 <div id="admlogin" style="font-size:19px; height:250px;">
 
	<div id="adm3" style="background-color:#8CDFDD; color:black; font-size:20px; text-align:center">
	   Forgot Password
	</div>
	<div id="adm5">
			<form method="post" action="forgotcheck.php" enctype="multipart/form-data">

				<input type="text" name="aname" placeholder="Enter Name" required class="form-control">
				<br>
				
				<button class="btn btn-info"> Submit </button>
			</form>
   </div> 	
 </div>
 </center>
 
<?php
 include "Footeradm.php";
?>   