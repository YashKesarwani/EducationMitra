<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> Game Designing </title>
	
 <body>
 <table class="table table-striped" style="width:75%;margin-left:10px;margin-right:50px">
 <caption style="color:black"><b><h3>TOP 25 COLLEGES FOR GAME DESIGNING AND DEVELOPMENT</h3></b></caption>
  <thead>
    <tr>
	  <th style="background-color:#8CDFDD">Name of Exams</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td>  University of Utah (Salt Lake City, UT) </td>
	</tr>
	<tr>
     <td> University of Southern California (Los Angeles, CA) </td>
	</tr>
	<tr>
     <td> Rochester Institute of Technology (Rochester, NY) </td>
	</tr>
	<tr>
     <td> DigiPen Institute of Technology (Redmond, WA) </td>
	</tr>
	<tr>
     <td> Becker College (Worcester, MA) </td>
	</tr>
	<tr>
     <td> The Art Institute of Vancouver (Vancouver, British Columbia) </td>
	</tr>
	<tr>
     <td> Hampshire College (Amherst, MA) </td>
	</tr>
	<tr>
     <td> Michigan State University (East Lansing, MI) </td>
	</tr>
	<tr>
     <td> Drexel University (Philadelphia, PA) </td>
	</tr>
	<tr>
     <td> New York University (Brooklyn, NY) </td>
	</tr>
	<tr>
     <td> The University of Texas at Dallas (Richardson, TX) </td>
	</tr>
	<tr>
     <td> Northeastern University (Boston, MA) </td>
	</tr>
	<tr>
     <td> Champlain College (Burlington, VT) </td>
	</tr>
	<tr>
     <td> Vancouver Film School (Vancouver, British Columbia) </td>
	</tr>
	<tr>
     <td> Bradley University (Peoria, IL) </td>
	</tr>
	<tr>
     <td> Ferris State University (Grand Rapids, MI) </td>
	</tr>
	<tr>
     <td> Lawrence Technological University (Southfield, MI) </td>
	</tr>
	<tr>
     <td> Rensselaer Polytechnic Institute (Troy, NY) </td>
	</tr>
	<tr>
     <td> Cogswell College (San Jose, CA) </td>
	</tr>
	<tr>
     <td> Shawnee State University (Portsmouth, OH) </td>
	</tr>
	<tr>
     <td> Abertay University (Dundee, Scotland) </td>
	</tr>
	<tr>
     <td> University of California-Santa Cruz (Santa Cruz, CA) </td>
	</tr>
	<tr>
     <td> Savannah College of Art and Design (Savannah, GA) </td>
	</tr>
	<tr>
     <td> Massachusetts Institute of Technology (Cambridge, MA) </td>
	</tr>
  </tbody>
 </table>
 <br><br>
    <a href="gamecourse.php" style="font-size:16px; color:blue">TO KNOW ABOUT GAME DESIGNING>>></a>
