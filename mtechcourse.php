<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> M.Tech Courses </title>
	
 <body>
 <div class="page-header" style="margin-left:10px; margin-right:10px; background-color:orange;word-spacing:4px; padding-left:4px; font-size:17px;"> 
	<h2 style="font-family:Comic Sans MS">M.Tech </h2>
	<h4>Master of engineering in many streams is very specialized course and lead to a very specific future in that industry.As any engineering stream is 
	 developed,more scope in industry  will comes up leading to specialized course in universities.
	 <br>there are numerous other engineering subdisciplines and interdisciplinary subjects that are derived from concentrations , combinations, or extensions of the 
	 major engineering branches.
	<br><br>
	</h4>
	<h3 style="font-family:Comic Sans MS; Text-decoration:underline">List Of Courses </h3>
	<h4 style="font-size:17px;">There are many types of M.tech programs that you can choose from-</h4>
	<b>-Chemical Engineering: </b>
	<ul>
	<li>Energy Engineering</li>
	<li>Process Control & Instrumentation</li>
	</ul>
	
	<b>-Civil Engineering: </b>
	<ul>
	<li>Engineering Structures</li>
	<li>Construction Technology & Management</li>
	<li>Geotechnical Engineering</li>
	<li>Transportation Engineering</li>
	<li>Environmental Engineering</li>
	<li>Remote sensing & GIS</li>
	<li>Water Resource Engineering</li>
	<li>Offshore Structure </li>
	</ul>
	
	<b>-Computer Science & Engineering: </b>
	<ul>
	<li>Computer Science</li>
	<li>Information Technology</li>
	<li>Information Security</li>
	<li>Software Engineering</li>
	<li>Distriuted Computing</li>
	<li>Image Processing</li>
	</ul>
	<b>-Mechanical Engineering: </b>
	<ul>
	<li>Thermal Engineering</li>
	<li>Computer Integrated Manufacturing</li>
	<li>Automoile Engineering</li>
	<li>Manufacturing Engineering</li>
	<li>Material Technology</li>
	<li>Industrial Engineering</li>
	<li>Product Design & Development</li>
	<li>Industrial Safety Engineering</li>
	</ul>
    <b>-Electronics & Communication Engineering: </b>
	<ul>
	<li>Advanced Communication System</li>
	<li>VLSI System Design</li>
	<li>Signal Processing</li>
	<li>Manufacturing Engineering</li>
	<li>Electronic Instrumentation</li>
	</ul>
 </h4>
	<br><br>
	<a href="mtechcolleges.php" style="font-size:16px;">TO KNOW ABOUT M.TECH COLLEGES>>></a><br><br>
	<a href="mtechexams.php" style="font-size:16px;">TO KNOW ABOUT M.TECH EXAMS>>></a>
  </div>
</body>
