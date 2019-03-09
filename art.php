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
 <div id="arts">
 </div>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange;word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS">ARTS </h2>
	<h4>is collectively a stream or a discipline in education that is intended to provide general knowledge and 
	 intellectual skills. After clearing higher secondary exams a student & composition can opt for <b>Bachelor of 
	 Arts (BA)</b> by taking a specialisation in any subject. Some of the importants subject offered by several colleges 
	 in the field of art are-
	 <br><br>
	 <b>Literature, Languages, Law, history, Performing arts, Religion, Sociology, Religion, Psychology, Philosophy and many 
	 more.</b> <br><br>
	 After completing graduation student can opt for <b>Master of Arts (MA)</b> in their chosen sunbjects. For further
	 higher studies they can also go for <b>Master of Philosophy(M.Phil.)</b> or <b>Doctors of Philosophy (Ph.D)</b>
	 in their respective subjects.
	 <br><br>
	 Students will learn to translate concepts into individual expression by using drawing, color, form, space, structure.
	 <br><br>
	</h4> 
	<h3 style="font-family:Comic Sans MS;Text-decoration:underline">CAREER PROSPECTS-</h3>
	<h4>-Illustrator<br><br>
	 -Visualiser<br><br>
     -Ideator<br><br>
	 -Conceptualist<br><br>
	 -Storyboard Artist<br><br>
	 -Concept Artist<br><br>
	 -Art Director<br><br>
	 -Brand Planner<br><br>
	 -Supervisor<br><br>
    </h4>  	 
 </div>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange;word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS">TEACHING </h2>
	<h4> is a noble profession. Teachers are highly valued & respected in the society. Education plays an important role in all round development &
	 prosperity of a nation. Teachers play a crucial role in educating the society. The profession of teaching is a challenging & demanding one. A teacher not only teaches his/her 
	 student but also shapes them into a good citizens & human beings. India is facing a shortage of qualified teachers.
	 <br><br>
	 If you are interested in this profession, you will have to pursue teaching courses, clear teacher's eligibility/aptitude test
     to become a teacher. Some of the courses can be pursued after 12th while some can be pursued after graduation. 
	 <br><br>
	</h4>
 </div>
 <table class="table table-striped" style="width:75%;margin-left:10px;margin-right:50px">
 <caption style="color:black"><b><h3>TEACHING COURSES-</h3></b></caption>
  <thead>
    <tr>
	  <th style="background-color:#8CDFDD">Name of Courses</th>
	</tr>
  </thead>
  <tbody>
    <tr>
      <td>B.A.+B.ED. Integrated Course</td>
	</tr>
	<tr>
      <td>B.Sc.+B.ED. Integrated Course</td>
	</tr>
	<tr>
      <td>B.EL.ED.</td>
	</tr>
	<tr>
      <td>D.EL.ED.</td>
	</tr>
	<tr>
      <td>B.P.ED.</td>
	</tr>
	<tr>
      <td>DPE</td>
	</tr>
	<tr>
      <td>B.ED.</td>
	</tr>
  </tbody>
 </table>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange"> 
	<h3 style="font-family:Comic Sans MS">Some similar Diploma Certificate teacher's training programs- </h2><br>
	<h4><b>-BTC(Basiic Training Certificate)<br><br>
       -PTC(Primary Teachers Certificate)<br><br>
	   -TTC(Teacher Training Certificate )<br><br>
	   -NTT(Nursery Teacher Training)<br><br>
	   -JBT(Junior Basic Training)<br><br>
    </h4>	  
	<br><br>
	<a href="artcolleges.php" style="font-size:17px;">TO KNOW ABOUT ART & TEACHING COLLEGES>>></a><br><br>
	<a href="artexams.php" style="font-size:17px;">TO KNOW ABOUT ENTRANCE EXAMS FOR ART & TEACHING COLLEGES>>></a>
 </div>
	   