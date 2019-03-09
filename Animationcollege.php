<?php
session_start();
if(empty($_SESSION["userid"]))							
header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> Animation</title>
	
 <body>
	<div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange; word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS">Animations and Design </h2> 
	<h4>Animation is now widely used in various sectors like IT and entertainment industry. It has contributed
	 much to the development of attractive multimedia clips and graphic rich images used in movies, cartoons, 
	 etc. Those with drawing skills and creative thinking can build up a strong and attractive career in animation.
  </div>
  <figure>
   <a href="http://www.arenamultimedia.in/" style="font-family:Comic Sans MS; color:black;">
    <img src="Pics/anim/arena.jpg" style="height:250px; width:30%;">
    <figcaption>ARENA ANIMATION INSTITUTE CERTIFICATE</figcaption>
   </a>
  </figure>	
  <table class="table table-striped" style="width:100%;margin-left:10px">
  <caption><b><h3>TOP Animation COLLEGES IN INDIA-</h3></b></caption>
  <thead>
      <tr>
	  <th>Name of Institute</th>
	  <th>City</th>
	  <th>Course</th>
  </tr>
  </thead>
  <tbody>
    <tr>
       <td>  National Institute of Design </td> 
	   <td>Ahmedabad </td> 
	   <td> B. Des in Animation Film Design , M. Des in Animation Film Design  </td> 
	</tr>
	<tr>
       <td>  Industrial Design Centre (IDC ) </td> 
	   <td> Mumbai </td> 
	   <td> M. Des in Animation </td> 
	</tr>
	<tr>
       <td>  Indian Institute of Digital Art & Animation (IIDAA ) </td> 
	   <td>Kolkata </td> 
	   <td> B. Sc. Animation , M . Sc. Animation , PG Diploma Art & Animation , Advance Diploma of 2 D 
	        Animation , Advance Diploma of 3 D Animation , Advance Diploma of VFX & Cine effects  </td> 
	</tr>
	<tr>
       <td>  Birla Institute of Technology </td> 
	   <td>Noida </td> 
	   <td> B. Sc. Animation & Multimedia , Masters in Animation Design, Ph. D (Doctoral Research Programme)
            in Animation , Multimedia and Communication  </td> 
	</tr>
	<tr>
       <td>  Film and Television Institute of India (FTII)  </td> 
	   <td>Pune </td> 
	   <td> 1 . 5 yr Certificate Course in Animation and Computer Graphics  </td> 
	</tr>
	<tr>
       <td> MAEER’s MIT Institute of Design </td> 
	   <td>Pune </td> 
	   <td></td> 
	</tr>
	<tr>
       <td>  Maya Academy of Advanced Cinematics (MAAC )  </td> 
	   <td>Gaziabad </td> 
	   <td> High-end 3D animation and VFX </td> 
	</tr>
	<tr>
       <td> Frameboxx </td> 
	   <td>Mumbai</td> 
	   <td> Advanced Diploma in Animation & Visual Effect and career Super Specialization,
     	   Certificate course in Animation & Visual Effects Specialiaztion, etc..</td> 
	</tr>
	<tr>
       <td> FX SCHOOL</td> 
	   <td>Mumbai </td> 
	   <td> VFX, Animation, FIlm Making, etc..  </td> 
	</tr>
	<tr>
       <td> Arena Animation </td> 
	   <td>Multiple Branches </td> 
	   <td> VFX, Animation, Web and Graphics, etc..  </td> 
	</tr>
	<tr>
  </tbody>
 </table>
 <br><br> 
 <a href="Animationexams.php" style="color:blue; font-size:18px;">TO KNOW ABOUT ENTRANCE EXAMS FOR ANIMATION COURSES IN COLLEGE>>></a><br><br>
 <a href="Animationcourse.php" style="color:blue; font-size:18px;">TO KNOW ABOUT ANIMATION COURSES>>></a>
 

 