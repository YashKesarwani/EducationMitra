<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
<title>Arts And Teaching</title>

 <body>
 <hr>

 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange"> 
	<h4>After clearing higher secondary exams a student & composition can opt for <b>Bachelor of Arts (BA) </b>by taking a specialisation in
	 any subject. Some of the importants subject offered by several colleges in the field of art are-
	 <br><br>
	 <b>Literature, Languages, Law, history, Performing arts, Religion, Sociology, Religion, Psychology, Philosophy</b> and many more.
	 <br><br>
	 After completing graduation student can opt for <b>Master of Arts (MA)</b>in their chosen sunbjects. For further higher studies
	 they can also go for <b>Master of Philosophy(M.Phil.)</b> or <b>Doctors of Philosophy (Ph.D) </b>in their respective subjects.
	 <br><br>
	</h4>
 </div>
 <table class="table table-striped" style="width:75%;margin-left:10px;margin-right:50px">
 <caption style="color:black"><b><h3>ART STREAM ENTRANCE EXAMS-</h3></b></caption>
  <thead>
    <tr>
	  <th style="background-color:#8CDFDD">Name of Exam</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Humanities & Social Sciences Entrance Examination (HSEE)</td>
	</tr>
	<tr>
      <td>Combined Shiksha Shastri entrance test(CSSET)</td>
	</tr>
	<tr>
      <td>Combined Shiksha Acharya entrance test(CSAET)</td>
	</tr>
	<tr>
      <td>DU DSE M.A. Economics Entrance test</td>
	</tr>
	<tr>
      <td>North Maharashtra University Entrance exam</td>
	</tr>
	<tr>
      <td>Patna Women's College BA/B.Sc Entrance Exam</td>
	</tr>
	<tr>
      <td>TISS National Entrance Test(TISSNET)</td>
	</tr>
  </tbody>
 </table>
	   <hr>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange"> 
	<h4>Teachers play a crucial role in educating the society. The profession of teaching is a challenging & demanding one. A teacher not only teaches his/her 
	 student but also shapes them into a good citizens & human beings. India is facing a shortage of qualified teachers.
	 <br><br>
	 If you are interested in this profession, you will have to pursue teaching courses, clear teacher's eligibility/aptitude test
	 to become a teacher. Some of the courses can be pursued after 12th while some can be pursued after graduation. 
	 <br><br>
	</h4>
 </div>
 <table class="table table-striped" style="width:75%;margin-left:10px;margin-right:50px">
 <caption style="color:black"><b><h3>ENTRANCE EXAMS FOR TEACHING COURSE-</h3></b></caption>
  <thead>
    <tr>
	  <th style="background-color:#8CDFDD">Name of Exam</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>B.ED.(for those who have finished their Master's with a min of 55% marks)</td>
	</tr>
	<tr>
      <td>M.ED.(Candidate must have cleared their bachelors from any accepted University)</td>
	</tr>
	<tr>
      <td>NET(National Eligibility Test)-It needs an M.Sc. or its equal degree</td>
	</tr>
	<tr>
      <td>SET(State Eligibility Test)-It requires masters degree</td>
	</tr>
  </tbody>
 </table>  
 <br><br>
  <a href="artcolleges.php" style="font-size:17px;color:blue;">TO KNOW ABOUT ART & TEACHING COLLEGES>>></a><br><br>	   
  <a href="art.php" style="font-size:17px;color:blue;">TO KNOW ABOUT ART & TEACHING COURSES>>></a><br><br>	   