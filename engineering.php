<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> Enginnering </title>
	<hr>
 <body>
 <center><img src="Pics/engineering/btech1.jpg" height=250px; width=50%></center> 
 <center><font size="25">ENGINEERING</font></center>
 <br><br>
 <div class="panel panel-default" id="d15" style="width:60%; position:relative; left:20%">
  <div class="panel-heading"style="background-color:orange; color:white; font-size:19px; text-align:center">CHOOSE AN OPTION</div>
   <ul class="list-group">
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="b.techcourse.php" 
		                                                       style="color:black;font-size:15px">B.E/B.Tech</a></li>
															   
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="mtechcourse.php" 
		                                                       style="color:black;font-size:15px">M.E/M.Tech</a></li>

		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="diplomacourse.php" 
		                                   style="color:black;font-size:15px">Diploma</a></li>													   
															   
   </ul>
 </div>

   