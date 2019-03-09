<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> MBBS </title>
	
 <body>
 <figure style="margin:10px">
  <a href="http://www.aiims.edu/" style="color:black; font-family:Comic Sans MS;">
   <img src="Pics/mbbs/AIIMS.jpg" style="height=250px; width:25%">
   <figcaption>AIIMS</figcaption>
  </a>
 </figure> 
 <table class="table table-striped" style="width:100%;margin-left:10px">
 <caption><b><h3>Top 25 Medical Colleges in India (Medicine/MBBS)-</h3></b></caption>
  <thead>
    <tr>
	   <th> Colleges </th>
	   <th> City </th>
	</tr>
  </thead>
  <tbody>
    <tr>
      <td> All India Institute of Medical Sciences (AIIMS)  </td> 
	  <td> Delhi  </td> 
    </tr>	 
    <tr>
	<td> Christian Medical College (CMC)  </td> 
	  <td> Vellore  </td> 
    </tr>
	<tr>
	<td>  Armed Forces Medical College (AFMC)  </td> 
	  <td> Pune  </td> 
    </tr>
	<tr>
	<td> JIPMER College  </td> 
	  <td> Puducherry  </td> 
    </tr>
	<tr>
	<td> Maulana Azad Medical College (MAMC)  </td> 
	  <td> Delhi  </td> 
    </tr>
	<tr>
	<td> Lady Hardinge Medical College (LHMC))  </td> 
	  <td> Delhi  </td> 
    </tr>
	<tr>
      <td> Madras Medical College  </td> 
	  <td> Chennai </td> 
    </tr>	 
    <tr>
	<td> Grant Medical College  </td> 
	  <td> Mumbai  </td> 
    </tr>
	<tr>
	<td>  Kasturba Medical College (KMC)  </td> 
	  <td> Manipal </td> 
    </tr>
	<tr>
	<td>  Sri Ramachandra Medical College and Research Institute </td> 
	  <td> Chennai </td> 
    </tr>
	<tr>
	<td>  University College of Medical Science & Research Centre  </td> 
	  <td> New Delhi  </td> 
    </tr>
	<tr>
	<td>  King George Medical College, CMM Medical University  </td> 
	  <td> Lucknow  </td> 
    </tr>
	<tr>
      <td> Seth G.S. Medical College  </td> 
	  <td> Mumbai </td> 
    </tr>	 
    <tr>
	<td> Bangalore Medical College (BMC)  </td> 
	  <td> Bangalore </td> 
    </tr>
	<tr>
	<td>  Christian Medical College (CMC)  </td> 
	  <td> Ludhiana </td> 
    </tr>
	<tr>
	<td>  St. John’s Medical College </td> 
	  <td> Bangalore </td> 
    </tr>
	<tr>
	<td>  Osmania Medical College  </td> 
	  <td> Hyderabad</td> 
    </tr>
	<tr>
	<td>  Institute of Medical Sciences </td> 
	  <td> Varanasi </td> 
    </tr>
	<tr>
	<td> Amrita Institute of Medical Science & Research Institute (AIMS)  </td> 
	  <td> Kocchi </td> 
    </tr>
	<tr>
	<td>  B.J. Medical College and Sassoon Hospital  </td> 
	  <td> Pune </td> 
    </tr>
	<tr>
	<td>   Nil Ratan Sarkar Medical College and Hospital ( NRS ) </td> 
	  <td> Kolkata </td> 
    </tr>
	<tr>
	<td>  Medical College and Hospital  </td> 
	  <td> Kolkata </td> 
    </tr>
	<tr>
	<td>   Institute of Post Graduate Medical Education & Research </td> 
	  <td> Kolkata </td> 
    </tr>
	<tr>
	<td>  MS Ramaiah Medical College  </td> 
	  <td> Bangalore </td> 
    </tr>
	<tr>
	<td>   Stanley Medical College (SMC) </td> 
	  <td> Chennai </td> 
    </tr>
  </tbody>
 </table>  
 <a href="mbbsexams.php" style="color:blue; font-size:17px;">TO KNOW ABOUT ENTRANCE EXAMS OF MBBS>>> </a><br><br>
 <a href="mbbscourse.php" style="color:blue; font-size:17px;">TO KNOW ABOUT MBBS COURSES>>> </a>	