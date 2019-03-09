<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> MBA</title>
	
 <body>
 <div class="page-header" style="margin-left:10px; margin-right:10px; background-color:orange;word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS">MBA </h2>
	<h4>is a master's degree in management and business administration. Business economy growth and demand for an MBA postgraduate
	has enlarged proportionally across the globe. The degree corse is highly popular among graduates. <br>
	MBA gives candidates a wider scope in various fields & helps to gain the right knowledge about management areas.
	<br><br>
	</h4>
	<h3 style="font-family:Comic Sans MS; Text-decoration:underline">TYPES OF MBA </h3>
	<h4>There are many types of MBA programs that you can choose from-<br><br>
	<b>-Regular MBA Program: </b>It comprises of 2 years of a degree course that begins from August and ends in May. You have to attend classes regularly<br><br>  
	<b>-Part Time MBA Program: </b>It is for working individuals,who cannot sit in the college the whole day as they have jobs already.
						Thus, they attend classes in the night.<br><br>
	<b>-Distance MBA Program: </b>It allows students to complete degree courses online or off campus.<br><br>
	<b>-Accelerated MBA Program: </b>It is of shorter duration than the regular program as there are no summer breaks.					  
	<br><br>
	</h4>
	<h3 style="font-family:Comic Sans MS;Text-decoration:underline">Admission Procedure</h3>
	<h4>Totally based on entrance exam conducted by particular university or institute. Later on, an individual interview is held along with 
	essay writing. Based on performances students are enrolled.<br>Some common national level tests are-<br><br>
	<b>-CAT</b>: For all IIM & 100 more universities.<br><br> 
	<b>-XAT</b>: For all XIM Bhubaneshwar ,XLRI Jamshedpur ,SP Jain.<br> <br> 
	<b>-SNAP</b>: Symbiosis university.<br> <br> 
	<b>-MH-CET</b>: For colleges in Maharashtra state.<br><br>  
	</h4>
	<h3 style="font-family:Comic Sans MS;Text-decoration:underline">Benefits of the Course</h3>
	<h4>Tiday there is a great need of managerial roles, which is occupied by MBA degree holders. They have good knowledge of management & know well how to handle issues
	related to work. There is agood career in plenty of job opportunities. One can definitely advances his career through MBA.
	<br><br>  </h4>
	<h3 style="font-family:Comic Sans MS;Text-decoration:underline">Salary</h3>
	<h4>Even a fresh graduate can earn a handsome salary in many companies. Plenty of MNC's offer high pay packages to MBAs. Additionally, MBA degree holders learn alot from
	top-level professionals, who provide them with firsthand knowledge of business & its working.
	</h4><br><br>
	
	<a href="mbacolleges.php" style="font-size:16px;">TO KNOW ABOUT MBA COLLEGES>>></a><br><br>
	<a href="mbaexams.php" style="font-size:16px;">TO KNOW ABOUT ENTRANCE EXAMS OF MBA COLLEGES>>></a>
  </div>
</body>
