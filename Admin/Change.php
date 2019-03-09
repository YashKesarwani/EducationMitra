<?php
 session_start();
 $thispage="settings";
 include "Headeradm.php";
 $aid=$_GET["id"];
?> 	
<title> Update </title>
<script>
function search()
{
	var a=new XMLHttpRequest();
	var n=document.getElementById("aid").innerHTML;
	a.open("get","search.php?aid="+n,true);
	a.send();
	a.onreadystatechange=function test()
	{
		if(a.readyState==4)
		{			
			var data=JSON.parse(a.responseText);
			document.getElementById("aname").value=data[0].aname
			document.getElementById("apass").value=""
			document.getElementById("acontact").value=data[0].acontact
			document.getElementById("aemail").value=data[0].aemail
			document.getElementById("acity").value=data[0].acity
			document.getElementById("res").innerHTML=""
		}
		else
		{
		document.getElementById("res").innerHTML="Loading...."	
		}
	}	
}
</script>
</head>
<body onload="search()">
<br><br>
<h2 style="font-family:Comic Sans MS;margin-left:30px;">Update Your Details-<br><br>	
<?php		
	echo "<form  style=\"width:400px;margin-left:300px\" autocomplete=off method=post action='savechange.php?id=$aid'>";
?>
		<h4>YOUR ID IS:- 
		<div id="aid" ><?php echo $aid; ?></div></h4>
		<input type="text" name="aname" id="aname" placeholder="Enter Name" required class="form-control" >
		<br>
		<input type="password" name="apass" id="apass" placeholder="Enter Password" required class="form-control" onblur="checkpass(this.value)">
		<br>
		<input type="number" name="acontact" id="acontact" placeholder="Enter Contact" required class="form-control" >
		<br>
		<input type="email" name="aemail" id="aemail" placeholder="Enter Email" required class="form-control" >
		<br>
		<input type="text" name="acity" id="acity" placeholder="Enter City" required class="form-control" >
		<br>
		<div id="res"></div>
		<button class="btn btn-warning"> Update </button>
	</form>
   </h2>
   
<?php
  include "Footeradm.php";
?>       