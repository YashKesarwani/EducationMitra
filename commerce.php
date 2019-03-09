<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> Commerce</title>
	   	
  <hr>
  <img src="Pics/commerce/cm1.jpg" height=250px width=25%>
  <div class="page-header" style="margin-left:10px; margin-right:10px; background-color:orange; word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS"> COMMERCE</h2>
	<h4 style=" line-height:25px;">Passed XII. What next? This is one of those question which takes 
	 plentiful of days to be resolved. Every student and their parents explore all available options 
	 to find the one course that suit them the best. From the uncountable options offered, below is a 
	 list of courses that are most apposite for a student with commerce background.
     <br><br><b>
     Bachelor of Commerce<br>
     Bachelor of Business Administration<br>
     Bachelor of Business Studies<br>
     Bachelor of Management Studies<br></b>
  </div>
  <table class="table table-striped" style="width:100%;margin-left:10px">
  <caption><b><h3>LIST OF COURSES-</h3></b></caption>
   <thead>
    <tr>
	  <th>Name of Course</th>
	  <th>Duration</th>
	<th>Popular Colleges</th>
    </tr>
   </thead>
  <tbody>
    <tr>
      <td>Bachelor of Commerce(BCom) </td> 
	  <td>3 yrs</td> 
	  <td>  Shri Ram college<br>
             St. Xavier's College<br>
             Narsee Monje College Of Commerce			 </td> 
	</tr>
	<tr>
      <td>Bachelor of Business Administration(BBA)</td> 
	  <td>3 yrs</td> 
	  <td>  Christ University<br>
             SRM University<br>
             Amity International Business School<br>			 </td> 
	</tr>
	<tr>
      <td> Bachelor of Business Studies(BBS)</td> 
	  <td>3 yrs</td> 
	  <td>  Shaheed Sukhdev College<br>
             Jamia Milia Islamia University	   </td> 
	</tr>
	<tr>
      <td> Bachelor of Management Studies(BMS)</td> 
	  <td>3 yrs</td> 
	  <td>  St. Xavier's College<br>
              SNDT Women's University<br>
              Sydenham College<br>			  </td> 
	</tr>
   </tbody>
  </table>
  <br><br>
  <a href="commercecolleges.php" style="color:blue; font-size:17px;">TO KNOW ABOUT COLLEGES FOR COMMERCE>>></a>
  <br><br>
  <a href="commerceexams.php" style="color:blue; font-size:17px;">TO KNOW ABOUT ENTRANCE EXAMS FOR 
   COLLEGES OF COMMERCE>>></a>