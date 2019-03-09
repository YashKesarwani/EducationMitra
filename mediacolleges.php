<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
<title>Mass Communication</title>

 <body>
 <img src="Pics/media/ICAT.jpg" height=250px width=25% style="margin:10px">
 <figcaption style="font-family:Comic Sans MS; margin:10px">ICAT</figcaption>
 <table class="table table-striped" style="width:75%;margin-left:10px;margin-right:10px">
 <caption style="color:black"><b><h1 style="font-family:Comic Sans MS;text-align:center">COLLEGES AND INSTITUTES</h1></b></caption>
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
	  <td>ICAT Design and Media College </td> 
	  <td>Bangalore</td> 
	</tr>
	<tr>
      <td>2</td> 
	  <td>IFIM College</td> 
	  <td>Banglore</td> 
	</tr>
	<tr>
      <td>3</td> 
	  <td>JD Institute of Fashion Technology</td> 
	  <td>Bangalore</td> 
	</tr>
	<tr>
      <td>4</td> 
	  <td>SGT University</td> 
	  <td>Gurgaon,Delhi</td> 
	</tr>
	<tr>
      <td>5</td> 
	  <td>WLC College</td> 
	  <td>Hyderabad</td> 
	</tr>
	<tr>
      <td>6</td> 
	  <td>NIMS University</td> 
	  <td>Delhi</td> 
	</tr>
	<tr>
      <td>7</td> 
	  <td>Jai Hind College</td> 
	  <td>Mumbai</td> 
	</tr>
	<tr>
      <td>8</td> 
	  <td>Amity University</td> 
	  <td>Mumbai</td> 
	</tr>
	<tr>
      <td>9</td> 
	  <td>St.Xavier College</td> 
	  <td>Mumbai</td> 
	</tr>
	<tr>
      <td>10</td> 
	  <td>Rizvi College</td> 
	  <td>Mumbai</td> 
	</tr>
  </tbody>
 </table>
 <br><br>
	<a href="media.php" style="font-size:18px;">Click To Know About Media Courses>>></a><br> 
