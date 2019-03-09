<?php
session_start();
$thispage="home";
include_once "Header.php";
?> 
<title> Feedback </title>
<body style="background-color:#C8ECF7">
 <center><h1 style="font-family:Comic Sans MS"><b>Give us your feedback</b></h2></center>
 <br><br><br>
 <div id="feed1">
  <form method="POST" action="Feedstore.php">
		<div id="feed2" style="float:left; padding-right:50px;">	
			<img src="Pics/pics/feed.jpg" style="height:400px;width:500px;margin-left:3px;border-radius:10px 10px 10px 10px"/>	
		</div>		
		<div id="feed3" style="text-align:right; padding:30px 30px 30px 30px;">
		  <b><h3 style="font-family:Comic Sans MS">Enter Your Name</b><br><br>
		   <textarea rows="2" cols="30" name="name"></textarea>
		   </h3>
		  <b><h3 style="font-family:Comic Sans MS">Enter Feedback</b><br><br>
			<textarea rows="8" cols="30" name="feed"></textarea>
			</h3>
			<br><br><br>
			<button class="btn btn-success">Submit</button> 				
		</div>		
  </form>	
 </div>			
</body>	
<?php	
	include "Footer.php";
?>	 