<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> Diploma Courses </title>
	
 <body>
 <div class="page-header" style="margin-left:10px; margin-right:10px; background-color:orange;word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS">DIPLOMA </h2>
	<h4>The Diploma in Engineering Diploma in Technical Studies is a technical degree below the 
	 undergraduate rank which aims to provide students with some basic knowledge of engineering, 
	 scientific, computing, mathematical techniques, a sound knowledge of English to communicate in 
	 the job field and ability to apply the basic problem solving techniques. Its duration is of 3-4 years. 
	 Many countries in the world recognize it as equivalent to Inter-Science or Pre-Engineering for 
	 further studies purpose. 
	 <br> <br> 
	 After successful completion of Diploma in Engineering course, students can either continue further 
	 Engineering studies in undergraduate level or get employment as supervisors, foremen, sales 
	 engineers, workshop technicians, draughtsman, service station managers, auto engineers, agricultural 
	 overseers, farm managers, junior instructors, workshop superintendents etc.
	 In most of the countries one can apply for studying diploma in engineering degree after completion 
	 of 10th grade or the secondary school certificate.
	 <br>
	 There are numerous other engineering subdisciplines and interdisciplinary subjects that are derived 
	 from concentrations , combinations, or extensions of the major engineering branches.
	 <br><br>
	 <img src="Pics/engineering/dip2.png" height=250px; width=25%>
	</h4>
	<h3 style="font-family:Comic Sans MS; Text-decoration:underline">List Of Courses </h3>
	<h4>Diploma in Engineering degree can be obtained from one of the following disciplines:-</h4>
	 <ul style="font-size:17px;">
	 <li>Aeronautical engineering</li>
	 <li>Automobile Engineering</li>
	 <li>Civil engineering</li>	
	 <li>Chemical engineering </li>
	 <li> Computer systems engineering</li>
	 <li> Electrical Engineering</li>
	 <li>Electronic engineering </li>
	 <li>Environmental engineering </li>
	 <li> Geographic information systems</li>
	 <li>Instrumentation & Process Control Engineering </li>
	 <li>Mechanical engineering </li>
	 <li> Mining Engineering</li>	
	 <li> Cad engineering</li>
	 <li> Textile Engineering</li>
	 <li>Glass Engineering</li>
	 <li> Ceramic Engineering</li>
	 <li> Vocational Information Technology</li>
	 </ul>
	</h4>
	 <br><br>
	<a href="diplomacollege.php" style="font-size:16px;">TO KNOW ABOUT DIPLOMA COLLEGES>>></a><br><br>
  </div>
</body>
