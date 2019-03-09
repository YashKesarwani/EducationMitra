<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
<title>Law</title>
   
 <body>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange;word-spacing:4px; padding-left:4px;"> 
	<h4><b>The first law university in India was established in Bangalore named as "National Law School of India University", popularly known as NLS.
	There are several law colleges in India today that take admission on the basis of entrance exams conducted by other bodies. Such as CLAT scores are used by many
	colleges<br>
	Similarly, some colleges accept ranks of multiple law entrance exams.<b>
	<br><br>
	<div id="coll"> 
  </div>
  </div>
	<table class="table table-striped" style="width:75%;margin-left:10px;margin-right:10px">
	<caption style="color:black"><b><h3>LAW COLLEGES IN INDIA-</h3></b></caption>
	 <thead>
      <tr>
		<th style="background-color:#8CDFDD">Rank</th>
		<th style="background-color:#8CDFDD">Institute</th>
		<th style="background-color:#8CDFDD">Location</th>
	  </tr>
	 </thead>
	 <tbody>
	  <tr>
		<td>1</td> 
		<td>National Law school of India University</td> 
		<td>Bangalore</td> 
	  </tr>
	  <tr>
		<td>2</td> 
	    <td>Rajiv Gandhi School of Law,IIT Kharagpur</td> 
		<td>Kharagpur</td> 
	  </tr>
	  <tr>
		<td>3</td> 
		<td>National Law University</td> 
		<td>Jodhpur</td> 
	  </tr>
	  <tr>
		<td>4</td> 
		<td>National University of Juridical Sciences</td> 
		<td>Kolkata</td> 
	  </tr>
	  <tr>
		<td>5</td> 
		<td>National Academy of Legal Studies</td> 
		<td>Hyderabad</td> 
	  </tr>
	  <tr>
		<td>6</td> 
		<td>Faculty of Law</td> 
		<td>Delhi</td> 
	  </tr>
	  <tr>
		<td>7</td> 
		<td>Indian Law Institute</td> 
		<td>New delhi</td> 
	  </tr>
	  <tr>
		<td>8</td> 
		<td>National Law Institute University</td> 
		<td>Bhopal</td> 
	  </tr>
	  <tr>
		<td>9</td> 
		<td>National Law University</td> 
		<td>Gandhinagar</td> 
	  </tr>
	  <tr>
		<td>10</td> 
		<td>University Law School</td> 
		<td>Varanasi</td> 
	  </tr>
	 </tbody>
	</table>
   <br><br>	
  <a href="lawexams.php" style="color:blue; font-size:16px;">TO KNOW ABOUT ENTRANCE EXAMS IN LAW COLLEGES>>></a><br><br>	   
  <a href="lawcourse.php" style="color:blue; font-size:16px;">TO KNOW ABOUT LAW COURSES>>></a>  	   
 