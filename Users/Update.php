<?php
include "../Validate.js";
include "Menu.php";
$uid=$_GET["id"];
?> 
<script>
function search()
{
	var a=new XMLHttpRequest();
	var n=document.getElementById("uid").innerHTML;
	a.open("get","search.php?uid="+n,true);
	a.send();
	a.onreadystatechange=function test()
	{
		if(a.readyState==4)
		{			
			var data=JSON.parse(a.responseText);
			document.getElementById("fname").value=data[0].fname
			document.getElementById("lname").value=data[0].lname
			document.getElementById("pass").value=""
			document.getElementById("mail").value=data[0].mail
			document.getElementById("mobile").value=data[0].mobile
			document.getElementById("interest").value=data[0].interest
			document.getElementById("course").value=data[0].course
			document.getElementById("city").value=data[0].city
			document.getElementById("res").innerHTML=""
		}
		else
		{
		document.getElementById("res").innerHTML="Loading...."	
		}
	}	
}
</script>
<body style="background-color:#C8ECF7" onload="search()">
<br><br>
<h2 style="font-family:Comic Sans MS;margin-left:50px;">Update Your Details-<br><br>	
<?php		
	echo "<form  style=\"width:400px;margin-left:350px\" autocomplete=off method=post action='SaveU.php?id=$uid'>";
?>
		<h4>YOUR USER ID IS:- 
		<div id="uid" ><?php echo $uid; ?></div></h4>
		<input type="text" name="fname" id="fname" placeholder="First Name" required class="form-control" >
		<br>
		<input type="text" name="lname" id="lname" placeholder="Last Name" required class="form-control" >
		<br>
		<input type="password" name="pass" id="pass" placeholder="Enter Old Password" required class="form-control" onblur="checkpass(this.value)">
		<br>
		<input type="password" name="npass" id="npass" placeholder="Enter New Password" required class="form-control" onblur="checkpass(this.value)">
		<br>
		<span id="chck0" ></span>
		<input type="text" name="mail" id="mail" placeholder="Email" required class="form-control" onblur="checkmail(this.value)">
		<br>
		<span id="chck1" ></span>
		<input type="number" name="mobile" id="mobile" placeholder="Mobile no." required class="form-control" onblur="checknum(this.value)">
		<br>
		<span id="chck2" ></span>
		<input type="text" name="interest" id="interest" placeholder="Education Interest" required class="form-control">
		<br>
		<input type="text" name="course" id="course" placeholder="Desired Course" list=list1 required class="form-control" onkeyup="getcourse(this.value)">
		<br>
		<datalist id="list1"></datalist>
		<br>
		<input type="text" name="city" id="city" placeholder="Current City" list=list2  required class="form-control" onkeyup="getcity(this.value)">
		<br>
		<datalist id="list2"></datalist>
		<br>
		<div id="res"></div>
		<button class="btn btn-warning"> Update </button>
	</form>
   </h2>
<?php
 include "Footer.php" ;
?> 