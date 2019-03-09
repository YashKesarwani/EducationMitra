<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> Commerce</title>
	
  <div class="page-header" style="margin-left:10px; margin-right:10px; background-color:orange; word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS"> COMMERCE</h2>
	<h4 style=" line-height:25px;">The idea of commerce includes a complex system of companies who try 
	 to maximize their profits by offering services and products in the market both individuals and 
	 companies at lowest cost. The commerce stream is generally divided into-<b> Finance, Accounting,
	 Economics, E-Commerce and Business Administration.</b> Thus, commerce is a system or an environment 
	 that affects the business prospects of economics.<br><br>
	 Like many other streams commerce students also have various options for appearing entrance exams 
	 after 12th. Commerce Entrance Exam will help the students to choose their career in various fields 
	 such as ICSI Company Secretaries (CS), ICAI Chattered Accountant (CA) and DU DSE M.Com.<br><br>
	 The CPT (Common Proficiency Test) is conducted by The Council of The Institute Chartered Accountants 
	 of India(ICAI) which will lead to a person becoming a Chartered Accountant. ICAI will hold three 
	 level of examinations-<br><br>
	 <b>CPT (Common Proficiency Test)<br><br>
     IPCC(Integrated Professional Competence Course)<br><br>
	 Three years of Practical Training Under a Practicing Chartered Accountant.
  </div>
 <table class="table table-striped" style="width:75%;margin-left:10px;margin-right:50px">
 <caption style="color:black"><b><h3>LIST OF ENTRANCE EXAMS</h3></b></caption>
  <thead>
    <tr>
	  <th style="background-color:#8CDFDD">SR NO.</th>
	  <th style="background-color:#8CDFDD">Name of Exams</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td>1</td>
	 <td>CS-ICSI Company Secretaries</td>
	</tr>	
    <tr>
     <td>2</td>
	 <td>CA-ICAI Chartered Acccountants</td>
	</tr>	
    <tr>
     <td>3</td>
	 <td>ICMAI Cost Accountants</td>
	</tr>	
    <tr>
     <td>4</td>
	 <td>DU DSE M.Com Entrance Test</td>
	</tr>	
    <tr>
     <td>5</td>
	 <td>Patna Women's College B.Com Entrance Test</td>
	</tr>
    <tr>
     <td>6</td>
	 <td>CFA Institute (CFA Program,CIPM Program,Claritas Investment Certificate)</td>
	</tr>	
  </tbody>
 </table>
  <br><br>
  <a href="commercecolleges.php" style="color:blue; font-size:17px;">TO KNOW ABOUT COLLEGES FOR COMMERCE>>></a>
  <br><br>
  <a href="commerce.php" style="color:blue; font-size:17px;">TO KNOW ABOUT COMMERCE>>></a>    