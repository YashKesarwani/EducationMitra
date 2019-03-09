<?php
 $thispage="register";
 include_once "Header.php";
 include "Validate.js";
?> 
  <title> Register</title>
   <center>
	<div id="register" style="font-size:17px;">
 
	<div id="d7" style="background-color:orange; color:white; font-size:19px; text-align:center">
	   Connect to us
	</div>
	<div id="d14">

				<form  autocomplete=off method="post" action="Save1.php">

				<input type="text" name="fname" placeholder="First Name" required class="form-control">
				<br>
				<input type="text" name="lname" placeholder="Last Name" required class="form-control" >
				<br>
				<input type="password" name="pass" placeholder="Enter Password" required class="form-control" onblur="checkpass(this.value)">
				<br>
				<span id="chck0" ></span>
				<input type="email" name="mail" placeholder="Email" required class="form-control" onblur="checkmail(this.value)">
				<br>
				<span id="chck1" ></span>
				<input type="number" name="mobile" placeholder="Mobile no." required class="form-control" onblur="checknum(this.value)">
				<br>
				<span id="chck2" ></span>
				<input type="text" name="interest" placeholder="Education Interest" required class="form-control">
				<br>
				<input type="text" name="course" placeholder="Desired Course" list=list1 required class="form-control" onkeyup="getcourse(this.value)">
				<br>
				<datalist id="list1"></datalist>
				<br>
				<input type="text" name="city" placeholder="Current City" list=list2  required class="form-control" onkeyup="getcity(this.value)">
				<br>
				<datalist id="list2"></datalist>
				<br>
				<h6>By signing up, you agree to our <a href="" style="color:blue;">Terms & Conditions & privacy policy</a> </h6>
				<button class="btn btn-warning"> Signup </button>
			</form>
			<form action="Login.php" form method="GET" >
                <button class="btn btn-info">Already a member? Login here </button>
			</form>
   </div> 	
 </div>
 </center>
 </body>
<?php
 include "Footer.php";
?>   