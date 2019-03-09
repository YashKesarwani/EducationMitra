<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
<title> B.Tech</title>
	
 <body>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange"> 
	<h2 style="font-family:Comic Sans MS">Bachelor Of Technology</h2>
	<h4>B.tech is an undergraduate academic degree conferred after completion of a three or four-year 
	program of studies at an accredited university-level institution. The degree is conferred in the 
	Commonwealth of nations, the United States and elsewhere. 
 </div>
 <figure>
  <a href="http://www.srmuniv.ac/" style="color:black; font-family:Comic Sans MS">
   <img src="Pics/engineering/SRM.JPG">
   <figcaption>SRM Modinagar, NCR, Delhi</figcaption>
  </a>
 </figure>   
 <table class="table table-striped" style="width:100%;margin-left:10px;text-transform:Capitalize;">
 <caption><b><h3>TOP B.TECH COLLEGES IN INDIA-</h3></b></caption>
 <thead>
    <tr>
	  <th>Name of Institute</th>
	  <th>City</th>
	  <th>Rank</th>
    </tr>
 </thead>
 <tbody>
    <tr>
       <td> Indian institute of technology madras </td> 
	   <td> Chennai</td> 
	   <td> 1  </td> 
	</tr>
    <tr>
       <td> Indian institute of tehnology Bombay  </td> 
	   <td>Bombay </td> 
	   <td> 2 </td> 
	</tr>
    <tr>
       <td> Indian institute of technology delhi </td> 
	   <td>New Delhi </td> 
	   <td> 3  </td> 
	</tr>
    <tr>
       <td> Indian institute of technology Kharagpur  </td> 
	   <td>Kharagpur </td> 
	   <td> 4  </td> 
	</tr>
    <tr>
       <td> Indian institute of technology Kanpur  </td> 
	   <td>Kanpur </td> 
	   <td> 5  </td> 
	</tr>
    <tr>
       <td> Indian institute of technology Roorkee  </td> 
	   <td>Roorkie </td> 
	   <td> 6  </td> 
	</tr>
	<tr>
       <td> Indian institute of technology Hyderabad </td> 
	   <td>Hyderabad </td> 
	   <td> 7 </td> 
	</tr>
    <tr>
       <td> Indian institute of technology Gandhinagar </td> 
	   <td>Gandhinagar</td> 
	   <td> 8  </td> 
	</tr>
	<tr>
       <td> Indian institute of technology Roopnagar </td> 
	   <td>Ropar </td> 
	   <td> 9  </td> 
	</tr>
	<tr>
       <td> Indian institute of technology Patna  </td> 
	   <td>Patna </td> 
	   <td> 10  </td> 
	</tr>
	<tr>
       <td> Indian institute of technology Guwahati </td> 
	   <td>Guwahati </td> 
	   <td> 11 </td> 
	</tr>
	<tr>
	   <td>Indian institute of technology Tiruchirappalli </td> 
	   <td>Tiruchirappalli </td> 
	   <td> 12  </td> 
	</tr>
	<tr>
	   <td>Indian institute of Technology Vellore </td> 
	   <td>Vellore </td> 
	   <td> 13  </td> 
	</tr>
	<tr>
	   <td>Indian Institute of Technology BHU   </td> 
	   <td>Varanasi </td> 
	   <td> 14  </td> 
	</tr>
	<tr>
	   <td> Indian Institute of Technology Surat </td> 
	   <td>Surat </td> 
	   <td> 15  </td> 
	</tr>
 </tbody>
 </table>
	<br><br>
   <a href="b.techexams.php" style="font-size:16px; color:blue">TO KNOW ABOUT ENTRANCE EXAMS FOR BTech>>></a><br><br>
   <a href="b.techcourse.php" style="font-size:16px;color:blue;">TO KNOW ABOUT B.Tech COURSES>>></a><br><br> 	
