<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
<title>Fashion Designing</title>

 <body>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange; word-spacing:4px; padding-left:4px;"> 
	<h4><b>A fasion designer visualises,plans & implements a dress or a attire including its fabric, texture, color code,
	  accessories etc.
	  The design is sketched before the dress is put in forstiching 7 all nuances like comfort, size, season etc. are 
	  taken into consideration for the same.
	  <br><br>
	<h3>Eligibility for Fashion technology Exams-</h3>
	  <br><br>
	  -Higher Secondary for under graduate courses
	  <br><br>
	  -Graduation for Post-graduate courses
	  <br><br>
	  -Appearing students can also apply for the examination
	  <br><br>
	</h4>
 </div>
 <table class="table table-striped" style="width:75%;margin-left:10px;margin-right:50px">
 <caption style="color:black"><b><h3>FASHION DESIGNING ENTRANCE TESTS</h3></b></caption>
   <thead>
    <tr>
	  <th style="background-color:#8CDFDD">Name of Exams</th>
    </tr>
   </thead>
   <tbody>
    <tr>
      <td>CEED (Common Entrance Examination for Design)</td>
	</tr>
	<tr>
      <td>NIFT(National Institute of Fashion Technology Entrance Examination) </td>
	</tr>
	<tr>
      <td>AIEED(All India Entrane Examination for Design)</td>
	</tr>
	<tr>
      <td> NID(National Institute of Design Entrance Examination)</td>
	</tr>
	<tr>
      <td> IIFT(International Institute of fashion Technology)</td>
	</tr>
	<tr>
      <td> SOFT(School of Fashion Technology Entrance Examination)</td>
	</tr>
	<tr>
      <td> IIAFT(Indian Institute of Arts & Fashion Technology)</td>
	</tr>
	<tr>
      <td>Pearl Academy of Fashion Entrance Examination </td>
	</tr>
   </tbody>
 </table>  
 <br><br>
 <a href="fashioncolleges.php" style="color:blue; font-size:16px;">TO KNOW ABOUT COLLEGES OFFERING FASHION DESIGNING>>></a> <br><br>
 <a href="fashion.php" style="color:blue; font-size:16px;">TO KNOW ABOUT FASHION DESIGNING>>></a>