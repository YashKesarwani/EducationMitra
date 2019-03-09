<?php
include "Menu.php";
echo "<br>";
$uid=$_SESSION["userid"];
?>
<title> Feedback </title>
<body style="background-color:#C8ECF7">
<center><h1 style="font-family:Comic Sans MS"><b>Give us your feedback</b></h2></center>
<br><br><br>
<div id="feed1">
 <form method="POST" action="Feedstore.php?id=<?php echo $uid ?>">
		<div id="feed2" style="float:left; padding-right:50px;">	
			<img src="Upics/feedback.JPG" style="height:400px;width:500px;margin-left:3px;border-radius:10px 10px 10px 10px"/>	
		</div>		
		<div id="feed3" style="text-align:right;padding:30px 30px 30px 30px;">
		  <b><h3 style="font-family:Comic Sans MS">Enter Feedback</b><br><br>
			<textarea rows="8" cols="30" name="feed"></textarea>
			<br><br><br>
			<button class="btn btn-success">Submit</button> 				
		</div>		
 </form>	
  <div id="feed4" style=" float:right; padding-right:30px;">
    <button class="btn btn-primary"><a href="Logout.php" style="text-decoration:none; color:white;">Skip</a></button>
  </div>
 </div>			
</body>	
<?php	
	include "Footer.php";
?>	