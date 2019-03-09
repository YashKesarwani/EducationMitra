<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
<title>Aviation Colleges</title>

 <body>
 <table class="table table-striped" style="width:75%;margin-left:10px;margin-right:10px">
 <caption style="color:black"><b><h1 style="font-family:Comic Sans MS;text-align:center">UNIVERSITIES</h1></b></caption>
  <thead>
    <tr>
	  <th style="background-color:#8CDFDD">S.no</th>
	  <th style="background-color:#8CDFDD">Name of College</th>
	  <th style="background-color:#8CDFDD">Location</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td> 
	  <td>University of Mumbai </td> 
	  <td>Mumbai</td> 
	</tr>
	<tr>
      <td>2</td> 
	  <td>Noida International University<Gautam Budh Nagar</td> 
	  <td>Gautam Budh Nagar,U.P</td> 
	</tr>
	<tr>
      <td>3</td> 
	  <td>NIMS University</td> 
	  <td>Aligarh,U.P</td> 
	</tr>
	<tr>
      <td>4</td> 
	  <td>I.K.Gujral Punjab Technical University</td> 
	  <td>Jalandhar</td> 
	</tr>
	<tr>
      <td>5</td> 
	  <td>Indus University</td> 
	  <td>Gujarat</td> 
	</tr>
	<tr>
      <td>6</td> 
	  <td>Lovely Professional University</td> 
	  <td>Jalandhar</td> 
	</tr>
	<tr>
      <td>7</td> 
	  <td>University of Petroleum and Energy Sudies</td> 
	  <td>Dehradun</td> 
	</tr>
	<tr>
      <td>8</td> 
	  <td>Alliance University</td> 
	  <td>Bangalore</td> 
	</tr>
	<tr>
      <td>9</td> 
	  <td>Bharath University</td> 
	  <td>Chennai</td> 
	</tr>
	<tr>
      <td>10</td> 
	  <td>Banasthali Universitiy</td> 
	  <td>Jaipur</td> 
	</tr>
  </tbody>
 </table>
 <br><br>
 <a href="hospitality.php" style="font-size:16px; color:blue;">TO KNOW ABOUT AVIATION COURSES>>></a><br>