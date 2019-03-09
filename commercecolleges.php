<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> Commerce</title>
	   
  <div class="page-header" style="margin-left:10px; margin-right:10px; background-color:orange; word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS"> COMMERCE </h2>
	<h4 style=" line-height:25px;">Among the three primary academic streams,Commerce is pone besides 
	Humanities and Science. Rapid Industralisation and fast growth of service sector has opened up a 
	huge number of avenues and opportunities for the students with commerce background.
	There are more than 10,000 colleges and 250 universities all across India. Among these more than 
	5,000 commerce colleges in India provide provide the students with the scope to gather knowledge 
	in various fields like Trade and Business,Marketing,Economics,Industrial & fiscal policies,
	Accountancy, Finance, Business Administration etc. As the Indian economy is growing fast, there 
	is requirement of talented professionaswho can contribute towards the Indian Economy.
	Different colleges all over the India, serve this purpose successfully and wonderfully. They offer
	both Undergraduate and Postgraduate courses in India.
	<div id="commerce">
    </div>
 </div>
 <table class="table table-striped" style="width:100%;margin-left:10px">
 <caption><b><h3>TOP 10 COMMERCE COLLEGES IN INDIA-</h3></b></caption>
  <thead>
    <tr>
	  <th>Rank</th>
	  <th>Name of College</th>
	  <th>Location</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       <td> 1</td> 
	   <td> Shri Ram College of Commerce(SRCC)</td> 
	   <td>  Delhi </td> 
	</tr>
	<tr>
       <td> 2</td> 
	   <td> Lady Shriram College for Women</td> 
	   <td>  Delhi </td> 
	</tr>
	<tr>
       <td>3 </td> 
	   <td>Loyola College</td> 
	   <td> Chennai</td> 
	</tr>
	<tr>
       <td> 4</td> 
	   <td> Christ College</td> 
	   <td> Bangalore </td> 
	</tr>
	<tr>
       <td> 5</td> 
	   <td> St. Xavier College</td> 
	   <td>   Mumbai</td> 
	</tr>
	<tr>
       <td> 6</td> 
	   <td> Anil Surendra Modi School of Commerce</td> 
	   <td> Mumbai  </td> 
	</tr>
	<tr>
       <td> 7</td> 
	   <td> Symbiosis College of Arts & Commerce</td> 
	   <td> Pune</td> 
	</tr>
	<tr>
       <td> 8</td> 
	   <td>St. Joseph's College of Commerce</td> 
	   <td>Bengaluru </td> 
	</tr>
	<tr>
       <td>9 </td> 
	   <td>Hansraj College</td> 
	   <td>New Delhi</td> 
	</tr>
	<tr>
       <td>10 </td> 
	   <td>Madras Christian College(MCC)</td> 
	   <td>Chennai</td> 
	</tr>
  </tbody>
 </table>  
 <br><br>
 <a href="commerceexams.php" style="color:blue; font-size:17px;">TO KNOW ABOUT ENTRANCE EXAMS FOR 
   COLLEGES OF COMMERCE>>></a><br><br>
 <a href="commerce.php" style="color:blue; font-size:17px;">TO KNOW ABOUT COMMERCE>>></a>  