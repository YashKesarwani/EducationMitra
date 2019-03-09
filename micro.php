<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> Microbiology</title>
	   	
  <div class="page-header" style="margin-left:10px; margin-right:10px; background-color:orange; word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS"> MICROBIOLOGY</h2>
	<h4 style=" line-height:25px;">Microbiology is a part of science which deals with the study of microorganisms. It is 
	 a division of biology which includes the study related to mycology,bacteriology,virology & other fields as well.
	 The microorganism studied are protozoa, algae, bacteria & fungi. These organisms are very small & are not visible 
	 through our naked eyes. Generally,microbiology includes the study of immunology or immune system. Microorganisms 
	 are useful for agriculture, subsurface pollution in soils, marine environments & industrial wastes.
	 Those who are specialist in microbiology are known as microbiologists. Though, microbiology is considered as a 
	 research oriented field, microbiologists investigate & discover the existance of organisms & the affect to our 
	 lives.
	 <br><br>
	</h4> 
	<h3 style="font-family:Comic Sans MS; Text-decoration:underline">Few Courses offered under Microbiology-</h3><br>
	<h4><b>-Bachelor of Science in Applied Microbiology<br><br>
	       -Bachelor of Science in Clinical Microbiology<br><br>
		   -Bachelor of Science in Industrial Microbiology<br><br>
		   -Bachelor of Science in Microbiology<br><br>
		   -Bachelor of Science in Food Microbiology<br><br>
		   -Master of Science in Applied Microbiology<br><br>
		   -Master of Science in Clinical Microbiology<br><br>
		   -Master of Science in Industrial Microbiology<br><br>
		   -Master of Science in Medical Microbiology<br><br>
		   -Master of Science in Microbiology<br><br>
		   -Master of Science in Microbal Genetics and Bioinformatics<br><br></b>
	<h3 style="font-family:Comic Sans MS; Text-decoration:underline">Basic Eligibility-</h3><br>
	<h4><b>UG:<br><br></b>
	    For admission into bachelor's degree program a student must pass higher secondary education or 10+2 with 
		biology or mathematics as subject and minimum 55%-60% marks from any Institute/University. The duration 
		of the program is of 3 years.
	</h4>	
	<br><br>
	<h4><b>PG:<br><br></b>
	For admission into master's degree program a student must have a bachelor's degree in the relevant subject.
	The duration of the program is of 2 years.
	</h4>
	<br><br>
	<a href="microcolleges.php" style="font-size:16px;">TO KNOW ABOUT COLLEGES OFFERING  MICROBIOLOGY>>></a><br><br>
	<a href="microexams.php" style="font-size:16px;">TO KNOW ABOUT ENTRANCE EXAMS OF COLLEGES FOR MICROBIOLOGY>>></a>
  </div>
	
	