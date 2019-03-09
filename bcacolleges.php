<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> BCA</title>
	
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange; word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS">BCA </h2>
	<h4>Bachelor in computer application (BCA) is one of the popular courses among the students who want to 
	    make their career in the IT field. The duration of the course is 3 years and comprises of the subjects 
		like database, networking, data structure, core programming languages like ‘C’ and ‘java’. This course 
		provides a lot of opportunities to the students who are interested in computer field and wants to work 
		in the IT sector as programmer or software developer.
	 <br><br>
	</h4>
	<h3 style="font-family:Comic Sans MS; Text-decoration:underline">Admission Procedure</h3>	
	<h4>Some reputed colleges and universities takes an entrance exam for taking admission in BCA course but 
	   generally one can get admission on the basis of there 12th class marks. Some Govt. colleges and universities 
	   takes a small test to get into in the BCA course.Certain colleges also conduct a session of personal interview 
	   before admitting students. Application forms for various colleges are available during the months of May and 
	   June when the 12th standard results are declared. The candidates must fill the forms correctly and send them 
	   to the respective colleges along with the required documents before the last date.<br><br>
	   The aspirants who have cleared their High School Examination or Equivalent Diploma degree with mathematics 
	   as their subject in the qualifying Exam can apply for BCA. While the general minimum pass marks required is 
	   50%, some colleges have increased it to 60%. Most of the colleges need the candidate to be at least 17 years 
	   old while the maximum age varies between 22 to 25 years.
	</h4>
	<figure>
	 <a href="http://www.christuniversity.in/" style="font-family:Comic Sans MS; color:black;">
      <img src="Pics/bca/Christ University.jpg" style="height:250px; width:30%;">
      <figcaption>CHRIST UNIVERSITY</figcaption>
     </a>
    </figure>	
  </div>	
  <table class="table table-striped" style="width:100%;margin-left:10px">
  <caption><b><h3>TOP BCA COLLEGES IN INDIA-</h3></b></caption>
  <thead>
      <tr>
	  <th>Name of Institute</th>
	  <th>City</th>
  </tr>
  </thead>
  <tbody>
    <tr>
     <td>  Christ University </td> 
	   <td>Hosur Road, Bangalore </td> 
	</tr>
	<tr>
     <td> Department of Computer Applications, SRM University</td> 
	   <td>3 Veerasamy Street, West Mambalam, Chennai</td> 
	</tr>
	<tr>
     <td> Institute of Management Studies</td> 
	   <td>A-8B, IMS Campus, Sector-62, Noida</td> 
	</tr>
	<tr>
     <td> Madras Christian College</td> 
	   <td> Velachery Main Road, East Tambaram, Chennai</td> 
	</tr>
	<tr>
     <td> Symbiosis Institute of Computer Studies & Research </td> 
	   <td> 1st Floor, Atur Centre, Gokhale Cross Road, Model Colony, Pune, Maharashtra  </td> 
	</tr>
	<tr>
     <td> Birla Institute of Technology</td> 
	   <td> Mesra, Ranchi, Jharkhand </td> 
	</tr>
	<tr>
     <td>  Presidency College</td> 
	   <td> Kempapura, Near Reliance Fresh, Hebbal, Bengaluru, Karnataka </td> 
	</tr>
	<tr>
     <td> University College </td> 
	   <td> Kurukshetra </td> 
	</tr>
	<tr>
     <td>  Stella Maris College </td> 
	   <td> 17, Cathedral Road, Chennai </td> 
	</tr>
	<td> Xavier Institute of Computer Application</td> 
	   <td> Campus Navrangpura, P.B. No. 4168, Ahmedabad </td> 
	</tr>
  </tbody>
 </table>
  <br><br>
  <a href="bcacourse.php" style="font-size:16px; color:blue;">TO KNOW ABOUT COURSES OFFERING BCA>>></a> 
     
	