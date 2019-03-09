<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
	<title> Diploma Colleges </title>
	
 <body>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange"> 
	<h2 style="font-family:Comic Sans MS">DIPLOMA</h2>
	<h4>Following is the list of Top 15 Polytechnic Institutes in India. The list of Top 15 Polytechnic 
	 Institutes in India is not based on any particular order. These top polytechnic institutes in India 
	 offer a variety of professional courses. <br>
	 The list of best polytechnic institutes in India also include women's polytechnic institutes like 
	 Kalpana Chwala Government Polytechnic for Women in Ambala.<br/>
 </div>
 <table class="table table-striped" style="width:100%;margin-left:10px">
 <caption><b><h3>TOP DIPLOMA COLLEGES IN INDIA-</h3></b></caption>
  <thead>
    <tr>
	  <th>Name of Institute</th>
	  <th>City</th>
	  <th>Rank</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       <td> Barapada School of Engineering and Technology </td> 
	   <td>Bhadrak</td> 
	   <td> 1</td> 
	</tr>
	<tr>
       <td> Bharati Vidyapeeth's Jawaharlal Nehru Institute of Technology </td> 
	   <td>Pune </td> 
	   <td> 2  </td> 
	</tr>
	<tr>
       <td> Dayanand Sagar College of Engineering  </td> 
	   <td>Bangalore </td> 
	   <td> 3  </td> 
	</tr>
	<tr>
       <td> Ghousia Polytechnic for Women  </td> 
	   <td>Bangalore </td> 
	   <td> 4  </td> 
	</tr>
    <tr>
       <td> Government Polytechnic Amravati</td> 
	   <td> Amravati</td> 
	   <td> 5  </td> 
	</tr>
    <tr>
       <td>Government Polytechnic College </td> 
	   <td> Ahmedabad </td> 
	   <td> 6  </td> 
	</tr>
	<tr>
	   <td>Hindustan Academy </td> 
	   <td>Bangalore </td> 
	   <td> 7  </td> 
	</tr>
	<tr>
       <td> Institute of Rail Transport</td> 
	   <td>New Delhi </td> 
	   <td> 8 </td> 
	</tr>
    <tr>
       <td> Kalpana Chwala Government Polytechnic for Women</td> 
	   <td>Ambala</td> 
	   <td> 9  </td> 
	</tr>
	<tr>
       <td> Meera Bai Polytechnic for Women</td> 
	   <td> Delhi </td> 
	   <td> 10  </td> 
	</tr>
	<tr>
       <td> MEI Polytechnic</td> 
	   <td> Bangalore</td> 
	   <td> 11  </td> 
	</tr>
	<tr>
       <td> Nirma Universitu of Science and Technology </td> 
	   <td> Ahmedabad</td> 
	   <td> 12 </td> 
	</tr>
	<tr>
	   <td>Polytechnic for Women South Ext  </td> 
	   <td>Delhi</td> 
	   <td> 13  </td> 
	</tr>
	<tr>
	   <td>Rural Polytechnic for women </td> 
	   <td>Ahmednagar </td> 
	   <td> 14  </td> 
	</tr>   	 
	<tr>
	   <td> Govt. Polytechnic for Women </td> 
	   <td>Haryana</td> 
	   <td> 15  </td> 
	</tr>
  </tbody>
 </table>
  <br><br>	 
  <a href="diplomacourse.php" style="font-size:16px; color:blue">TO KNOW ABOUT DIPLOMA COURSES>>></a>
