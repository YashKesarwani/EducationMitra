<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> Information Technology </title>
	
 <body>
  <br>
 <div id="info">
 </div>
 <center><font size="25">INFORMATION TECHNOLOGY</font></center>
 <hr><br><br>
 <div class="panel panel-default" id="d15" style="width:60%; position:relative; left:20%">
  <div class="panel-heading"style="background-color:orange; color:white; font-size:19px; text-align:center">CHOOSE AN OPTION</div>
   <ul class="list-group">
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="bcacourse.php" 
		                                                       style="color:black;font-size:15px">BCA</a></li>
															   
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="dcacourse.php" 
		                                                       style="color:black;font-size:15px">DCA</a></li>

		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="Animationcourse.php" 
		                                   style="color:black;font-size:15px">ANIMATION AND DESIGNING</a></li>													   
															   
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="Ethicalcourse.php" 
		                                           style="color:black;font-size:15px">ETHICAL HACKING</a></li>		

		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="gamecourse.php" 
		                                style="color:black;font-size:15px">GAME DESIGN AND DEVELOPMENT</a></li>		

		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="web.php" 
		                                           style="color:black;font-size:15px">WEB DESIGNING AND DEVELOPMENT</a></li>								
  
   </ul>
 </div>

   