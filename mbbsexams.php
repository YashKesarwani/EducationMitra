<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> MBBS </title>
	
 <table class="table table-striped" style="width:100%;margin-left:10px">
 <caption><b><h3>MBBS ENTRANCE EXAMS-</h3></b></caption>
  <thead>
    <tr>
	   <th>Entrance Exam</th>
	</tr>
  </thead>
  <tbody>
    <tr>
      <td> All India Institute of Medical Sciences Nursing Entrance Examination  </td> 
    </tr>	 
    <tr>
      <td>Bhartiya Vidyapeeth Deemed University Undergraduate Medical Entrance Examination </td> 
    </tr>
    <tr>
      <td>All India Pre-Medical / Pre-Dental Entrance Examination </td> 
    </tr>
    <tr>
	<tr>
      <td> Armed Forces Medical College Pre Medical Test  </td> 
    </tr>	 
    <tr>
      <td>All India Institute of Medical Sciences MBBS Entrance Examination </td> 
    </tr>
    <tr>
      <td>Kalinga Institute of Medical Science Undergraduate Medical Entrance Exam </td> 
    </tr>
    <tr>
	<tr>
      <td> Mahatma Gandhi Institute of Medical Sciences Undergraduate Medical Exam  </td> 
    </tr>	 
    <tr>
      <td>Manipal University Online Entrance Test Medical </td> 
    </tr>
    <tr>
      <td>National Eligibility cum Entrance Test Undergraduate </td> 
    </tr>
    <tr>
	<tr>
      <td> Federation of Private Medical and Dental Colleges Rajasthan Pre Medical Test  </td> 
    </tr>	 
    <tr>
      <td>All India Institute of Medical Sciences Post Graduate Entrance Examination </td> 
    </tr>
    <tr>
      <td>All India PG Dental Entrance Exam </td> 
    </tr>
    <tr>
	<tr>
      <td> All India Post Graduate Medical Entrance Examination  </td> 
    </tr>	 
    <tr>
      <td>MGM Institute of Health Sciences Post Graduate Common Entrance Test </td> 
    </tr>
    <tr>
      <td>Manipal University Online Entrance Test PG Medical </td> 
    </tr>
    <tr>
	<tr>
      <td> Pravara Institute of Medical Sciences All India Common Entrance Test PG Medical  </td> 
    </tr>	 
    <tr>
      <td>The Association Of Managements Of Unaided Private Medical And Dental Colleges Association Combined Entrance Test </td> 
    </tr>
    <tr>
      <td>Manipur Post Graduate Medical Entrance Exam </td> 
    </tr>
    <tr>
  </tbody>
 </table>  
  <br><br>
  <a href="mbbscolleges.php" style="color:blue; font-size:16px;">TO KNOW ABOUT MBBS COLLEGES>>> </a>	<br><br>
  <a href="mbbscourse.php" style="color:blue; font-size:16px;">TO KNOW ABOUT MBBS COURSES>>> </a>	