<?php
session_start();
if(empty($_SESSION["userid"]))							//can be used for switching to the regsiter window when
 header("Location:Login.php");							//a new user tries to logon onto an check for courses or colleges 
    $thispage="courses";
	include_once "Header.php";
?> 
<title>Courses</title>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange; word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS">BTech..?? ENGINEERING..?? </h2>
	<h2 style="font-family:Comic Sans MS">MBBS..?? MEDICAL..?? </h2>
	<h2 style="font-family:Comic Sans MS">LAW..?? </h2>
	<h2 style="font-family:Comic Sans MS">ETHICAL HACKING..?? </h2>
	<h2 style="font-family:Comic Sans MS">ANIMATION AND DESIGNING..?? </h2>
	<h3 style="font-family:Comic Sans MS">What Field Should You Choose.... <br> Where Will It Lead You. 
	We Will Give You All Answers..!!</h3>
	<div id="gal">
	</div>
 </div>	
 <div class="panel panel-default" id="d15" style="width:60%; position:absolute; left:20%; top:780px;">
  <div class="panel-heading"style="background-color:orange; color:white; font-size:19px; text-align:center">CHOOSE AN OPTION</div>
   <ul class="list-group">
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="mbacourse.php" 
		                                                       style="color:black;font-size:15px">MBA</a></li>
															   
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="engineering.php" 
		                                               style="color:black;font-size:15px">ENGINEERING</a></li>
													   
        <li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="mbbscourse.php" 
		                                                   style="color:black;font-size:15px">MBBS</a></li>
														   
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="micro.php" 
		                                                   style="color:black;font-size:15px">MICROBIOLOGY</a></li>												   
														   									  
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="lawcourse.php" 
		                                                          style="color:black;font-size:15px">LAW</a></li>
																  
        <li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="art.php" 
		                                 style="color:black;font-size:15px">ARTS AND TEACHING</a></li>
										 
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="commerce.php" 
		                                 style="color:black;font-size:15px">Commerce</a></li>								 
										 
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="hospitality.php" 
		                            style="color:black;font-size:15px">HOSPITALITY, AVIATION AND TOURISM</a></li>
									
 		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="Information.php" 
		                                       style="color:black;font-size:15px">INFORMATION TECHNOLOGY</a></li>
											   
        <li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="media.php" 
		                          style="color:black;font-size:15px">MEDIA, FILMS AND MASS COMMUNICATION</a></li>
								  
        <li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="Ethicalcourse.php" 
		                                              style="color:black;font-size:15px">ETHICAL HACKING</a></li>
													  
        <li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="dcacourse.php" 
		                                                          style="color:black;font-size:15px">DCA</a></li>
																  
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="bcacourse.php" 
		                                                       style="color:black;font-size:15px">BCA</a></li>
															   
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="Animationcourse.php" 
		                                      style="color:black;font-size:15px">ANIMATION AND DESIGNING</a></li>
											  
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="gamecourse.php" 
		                                      style="color:black;font-size:15px">GAME DESIGNING AND DEVELOPMENT</a></li>
		
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href="fashion.php" 
		                                      style="color:black;font-size:15px">FASHION DESIGNING</a></li>
		
   </ul>
 </div>

<?php
 include "Footer.php";
?>   