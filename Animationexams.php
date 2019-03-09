<?php
session_start();
if(empty($_SESSION["userid"]))							
header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> Animation</title>
	
  <figure> 
   <a href="http://www.nid.edu/" style="color:black; font-family:Comic Sans MS">
    <img src="Pics/anim/Nid.JPG" height=250px width=25%>  
     <figcaption>National Institute Of Design</figcaption>
   </a>
  </figure> 
 <table class="table table-striped" style="width:100%;margin-left:10px">
 <caption><b><h3>ANIMATION ENTRANCE EXAMS-</h3></b></caption>
  <thead>
    <tr>
	   <th>Entrance Exam</th>
	</tr>
  </thead>
  <tbody>
    <tr>
      <td>Arena Animation Academy Entrance Exam  </td> 
    </tr>	 
    <tr>
      <td>DSK International Institute for Industrial Design, Animation and Gaming Entrance Exam  </td> 
    </tr>
    <tr>
      <td>Picasso Animation College Entrance Exam  </td> 
    </tr>
    <tr>
      <td>Mudra Institute of Communications Entrance Exam</td> 
    </tr>
    <tr>
      <td>Thakur-Toonskool Advanced Animation Academy Entrance Exam </td> 
    </tr>
    <tr>
      <td>Accel Animation Academy Entrance Exam</td> 
    </tr>
    <tr>
      <td>FX School Of Animation Entrance Exam </td> 
    </tr>
    <tr>
      <td>National School of Design Animation Entrance Exam</td> 
    </tr>
  </tbody>
 </table>  
  <br><br> 
 <a href="Animationcollege.php" style="color:blue; font-size:18px;">TO KNOW ABOUT COLLEGES HAVING ANIMATION COLLEGES>>></a><br><br>  
 <a href="Animationcourse.php" style="color:blue; font-size:18px;">TO KNOW ABOUT ANIMATION COURSES>>></a> 