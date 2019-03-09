<?php
session_start();
if(empty($_SESSION["userid"]))							
header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
<title>Arts And Teaching</title>

 <body>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange;word-spacing:4px; padding-left:4px;"> 
 <h4> Art is collectively a stream or a discipline in education that is intended to provide general knowledge and 
  intellectual skills. After clearing higher secondary exams a student & composition can opt for <b>Bachelor of 
  Arts (BA)</b> by taking a specialisation in any subject. Some of the importants subject offered by several colleges 
  in the field of art are-
  <br><br>
	<b>Literature, Languages, Law, history, Performing arts, Religion, Sociology, Religion, Psychology, Philosophy and many 
	 more.</b>
 </div>
 <figure>
  <a href="http://www.lsr.edu.in/" style="color:black; font-family:Comic Sans MS">
   <img src="Pics/arts/arts1.jpg" style="width:30%; height:250px;">
   <figcaption>LADY SHRIRAM COLLEGE CAMPUS</figcaption>
  </a>
 </figure> 
 <table class="table table-striped" style="width:75%;margin-left:10px;margin-right:10px">
 <caption style="color:black"><b><h3>TOP 10 ARTS COLLEGES IN INDIA-</h3></b></caption>
  <thead>
    <tr>
	  <th style="background-color:#8CDFDD">Rank</th>
	  <th style="background-color:#8CDFDD">Name of College</th>
	  <th style="background-color:#8CDFDD">Location</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td> 
	  <td>Lady Shriram College for Women</td> 
	  <td>Delhi</td> 
	</tr>
	<tr>
      <td>2</td> 
	  <td>Loyola College</td> 
	  <td>Chennai</td> 
	</tr>
	<tr>
      <td>3</td> 
	  <td>St. Stephen's College</td> 
	  <td>Delhi</td> 
	</tr>
	<tr>
      <td>4</td> 
	  <td>St. Xavier's College</td> 
	  <td>Mumbai</td> 
	</tr>
	<tr>
      <td>5</td> 
	  <td>Miranda house</td> 
	  <td>Delhi</td> 
	</tr>
	<tr>
      <td>6</td> 
	  <td>Christ College</td> 
	  <td>Bangalore</td> 
	</tr>
	<tr>
      <td>7</td> 
	  <td>Madras Christian College (MCC)</td> 
	  <td>Chennai</td> 
	</tr>
	<tr>
      <td>8</td> 
	  <td>Hindu College</td> 
	  <td>Delhi</td> 
	</tr>
	<tr>
      <td>9</td> 
	  <td>Fergusson College</td> 
	  <td>Pune</td> 
	</tr>
	<tr>
      <td>10</td> 
	  <td>Stella Maris College</td> 
	  <td>Chennai</td> 
	</tr>
  </tbody>
 </table>
   <hr>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange"> 
  <h4>If you are interested in this profession, you will have to pursue teaching courses, clear teacher's 
   eligibility/aptitude test to become a teacher. Some of the courses can be pursued after 12th while some can be 
   pursued after graduation. 
	<br><br>
  </h4>
 </div>
 <table class="table table-striped" style="width:75%;margin-left:10px;margin-right:50px">
 <caption style="color:black"><b><h3>LEADING UNIVERSITIES-</h3></b></caption>
   <thead>
    <tr>
	  <th style="background-color:#8CDFDD">Name of University</th>
    </tr>
   </thead>
   <tbody>
    <tr>
      <td>Annamalai University</td>
	</tr>
	<tr>
      <td>Bangalore University</td>
	</tr>
	<tr>
      <td>Jamia Millia Islamia Institute</td>
	</tr>
	<tr>
      <td>University of Kerela</td>
	</tr>
	<tr>
      <td>University of Madras</td>
	</tr>
	<tr>
      <td>Acharya Nagarjuna University,Guntur</td>
	</tr>
  </tbody>
 </table>
   <hr>
 <figure>
  <a href="http://www.ladyirwin.edu.in/" style="color:black; font-family:Comic Sans MS">
   <img src="Pics/arts/arts2.gif"  style="width:30%; height:250px;">
   <figcaption>LADY IRWIN COLLEGE CAMPUS</figcaption>
  </a>
 </figure>  
 <table class="table table-striped" style="width:75%;margin-left:10px;margin-right:50px">
 <caption style="color:black"><b><h3>TOP B.Ed COLLEGES IN DELHI -</h3></b></caption>
   <thead>
    <tr>
	  <th style="background-color:#8CDFDD">Name of College</th>
    </tr>
   </thead>
  <tbody>
    <tr>
      <td>Lady Irwin College</td>
	</tr>
	<tr>
      <td>Army Institute Of Education</td>
	</tr>
	<tr>
      <td>College of Education ,Delhi University</td>
	</tr>
	<tr>
      <td>Rashrtriya Sansrit Vidyapeetha</td>
	</tr>
	<tr>
      <td>Siddhi Vinayak College of Science & Hr. Education </td>
	</tr>
   </tbody> 
 </table>	   
	<br><br>	
	<a href="artexams.php" style="color:blue;font-size:16px;">TO KNOW ABOUT ENTRANCE EXAMS FOR ART & TEACHING COLLEGES>>></a><br>	<br>   
	<a href="art.php" style="font-size:16px;color:blue;">TO KNOW ABOUT ART & TEACHING COURSES>>></a><br>	   