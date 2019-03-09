<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> BCA </title>
	
 <body>
 <hr>
 <img src="Pics/bca/bca1.jpg" height=250px; width=25% style="margin-left:10px;">
 <div class="page-header" style="margin-left:10px; margin-right:10px; background-color:orange; word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS"> BCA </h2>
	<h4>Bachelor in computer application or (BCA) is an undergraduate degree course in computer application. With 
	  the rapid growth of IT industry in India, the demand of computer professional is increasing day by day. 
	  This increasing growth of IT industry has created a lot of opportunities for the computer graduates.
    	<br><br>
	</h4>
	<h3 style="font-family:Comic Sans MS; Text-decoration:underline">Eligibility and Admission </h3>
	<h4>The students who are interested in BCA as their higher studies must fulfill the following eligibility
			criteria:<br><br>
			-Should be a citizen of India.<br>
			-Must have passed class 12thor senior secondary examination with at least 50% marks including English.<br>
			-The minimum age limit is 17 years and the maximum age varies between 22-25 years.<br>
		The students are generally admitted on the basis of personal interview and written examination conducted 
		by various institutes/universities.
		<br>Some institutes/universities admit student on merit basis.<br><br>
	</h4>	
	<h3 style="font-family:Comic Sans MS; Text-decoration:underline">Course and Duration</h3>
	<h4>The BCA is an undergraduate degree course in computer application for duration of 3 years. After completing 
      BCA a student can go for MCA which is a master course in computer application and is considered equivalent
	  to engineering course B.tech.<br><br>
	</h4>  
	<h3 style="font-family:Comic Sans MS; Text-decoration:underline">Career and Jobs</h3>
	<h4>The demand of IT professionals is increasing not only in India but also in abroad. After the completion 
      of the course, the student can find a job in reputed IT companies like IBM, Oracle, Infosys, and Google. 
	  The student can work as a system engineer, junior programmer, web developer or as a system administrator. 
	  This field provides you ample opportunities to make your career not only in private sector but also in the 
	  public sector. The government organization like NIC, Indian Army, Indian Air Force and India Navy also recruit 
	  large number of computer professionals for their IT department. After the completion of the course a student’s 
	  work profile may include:<br><br>
		-System engineer in the top companies like Infosys, Wipro, HP, Google.<br><br>
		-Programmer in various software development firms.<br><br>
		-Web developer in various web designing companies and online digital marketing companies.<br><br>
		-System Administrator in an organization including a bank, school or college.<br><br>
		-Software developer in the companies like Microsoft, Google, Facebook.<br><br>
	</h4>		
	<h3 style="font-family:Comic Sans MS; Text-decoration:underline">Salary</h3> 
	<h4>One can expect minimum of &#8377 8000 after doing the BCA course.Starting salary is low but after onwards 
       as experiences increased your salary would also increases.<br><br>
	   The IT field is one of the highest paying fields for a fresher. A computer professional working in a 
	   big MNC can easily get an initial package of &#8377 25,000 to &#8377 40,000 per month. Some IT giants like 
	   Google, Microsoft, Oracle, Facebook pays even a six figure salary to a fresh graduate.<br><br>
	</h4>
  <a href="bcacolleges.php" style="font-size:16px;">TO KNOW ABOUT COLLEGES OFFERING BCA>>></a> 
 </div> 