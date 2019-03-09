<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> MBA Colleges </title>
	
 <body>
  <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange; word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS">MBA </h2>
	<h4>is a master's degree in management and business administration. Business economy growth and demand for an MBA postgraduate
	  has enlarged proportionally across the globe. The degree corse is highly popular among graduates.<br>
	  MBA gives candidates a wider scope in various fields & helps to gain the right knowledge about management areas.
		<br><br>
	  A bachelor's degree under 10+2+3 scheme from a renowned academy or a deemed university with at least 50% marks(40% for reserved groups)
	  Applicants in bachelor's degree appearing for final year examination are also qualified for MBA.
      <div id="colleges"> 
	  </div>
  </div>
  <table class="table table-striped" style="width:100%;margin-left:10px">
  <caption><b><h3>TOP MBA COLLEGES IN INDIA-</h3></b></caption>
   <thead>
    <tr>
	   <th>Name of Institute</th>
	   <th>City</th>
	   <th>Course</th>
    </tr>
   </thead>
   <tbody>
    <tr>
       <td> IIM Ahmedabad </td> 
	   <td>Ahmedabad </td> 
	   <td> PGP  </td> 
	</tr>
	<tr>
       <td> IIM Calcutta </td> 
	   <td>Kolkata </td> 
	   <td> PGDM </td> 
	</tr>
	<tr>
       <td> IIM Bangalore </td> 
	   <td>Ahmedabad </td> 
	   <td> PGP  </td> 
	</tr>
	<tr>
       <td> IIM Ahmedabad </td> 
	   <td>Ahmedabad </td> 
	   <td> PGP  </td> 
	</tr>
	<tr>
       <td> IIM Ahmedabad </td> 
	   <td>Bangalore </td> 
	   <td> PGP  </td> 
	</tr>
	<tr>
       <td> IIM Lucknow </td> 
	   <td>Lucknow </td> 
	   <td> PGP  </td> 
	</tr>
	<tr>
       <td> XLRI </td> 
	   <td>Jamshedpur </td> 
	   <td> BM </td> 
	</tr>
	<tr>
       <td> Faculty of Management Studies </td> 
	   <td>Delhi/NCR</td> 
	   <td> MBA  </td> 
	</tr>
	<tr>
       <td> IIM Kozhikode</td> 
	   <td>Kerela </td> 
	   <td> PGP  </td> 
	</tr>
	<tr>
       <td> IIM Indore </td> 
	   <td>Indore </td> 
	   <td> PGP  </td> 
	</tr>
	<tr>
	   <td> IIFT </td> 
	   <td>Delhi/NCR </td> 
	   <td> MBA </td> 
	</tr>
	<tr>
	   <td>JBIMS </td> 
	   <td>Mumbai </td> 
	   <td> MMS  </td> 
	</tr>
	<tr>
	   <td>IMT </td> 
	   <td>Delhi </td> 
	   <td> PGDM  </td> 
	</tr>
	<tr>
	   <td>Rajiv Gandhi IIM </td> 
	   <td>Meghalaya </td> 
	   <td> PGP  </td> 
	</tr>
	<tr>
	   <td>IIT Kanpur </td> 
	   <td>Kanpur </td> 
	   <td> MBA  </td> 
	</tr>
	<tr>
	   <td>IRMA </td> 
	   <td>Anand </td> 
	   <td> PRM  </td> 
	</tr>
	<tr>
	   <td>IIT Kharagpur</td> 
	   <td>Kharagpur </td> 
	   <td> MBA  </td> 
	</tr>
  </tbody>
 </table>
	   
	  <hr>
<table class="table table-striped" style="width:100%;margin-left:10px">
 <caption><b><h3>RANKINGS OF SOME MBA COLLEGES-</h3></b></caption>
  <thead>
    <tr>
	  <th>Name of COLLEGE</th>
	  <th>City</th>
	  <th>Business Today Ranking</th>
	  <th>The Week Ranking</th>
	</tr>
  </thead>
  <tbody>
    <tr>
       <td> Vidyasagar Institute of Management </td> 
	   <td>Bhopal </td> 
	   <td> 253  </td>
	   <td> 150  </td>	   
	</tr>	  
    <tr>
       <td> Hallmark Business School </td> 
	   <td>Tiruchirappalli </td> 
	   <td> 257  </td>
	   <td> 148  </td>	   
	</tr>	
	<tr>
       <td> St. Joseph Degree College </td> 
	   <td>Hyderabad </td> 
	   <td> 242  </td>
	   <td> 147  </td>	   
	</tr>	
	<tr>
      <td> MEASIIM </td> 
	  <td>Chennai </td> 
	  <td> 255  </td>
	  <td> 146  </td>	   
	</tr>	
	<tr>
      <td> Sara Vidyalaya Institute of Management </td> 
	  <td>Gandhinagar </td> 
	  <td> 213  </td>
	  <td> 144  </td>	   
	</tr>
	<tr>
	  <td> CMRCBS </td> 
	  <td>Bangalore </td> 
	  <td> 220  </td>
	  <td> 140  </td>	   
	</tr>
  </tbody>
 </table>  
	   <br><br>
  <a href="mbaexams.php" style="font-size:16px; color:blue;">TO KNOW ABOUT ENTRANCE EXAMS OF MBA COLLEGES>>></a><br><br> 
  <a href="mbacourse.php" style="font-size:16px; color:blue">TO KNOW ABOUT MBA COURSES>>></a>