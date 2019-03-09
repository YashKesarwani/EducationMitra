<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> Microbiology</title>
	
 <body>
  <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange;word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS">MICROBIOLOGY</h2>
	<h4 style=" line-height:25px;">Microbiology is a part of science which deals with the study of microorganisms. It 
	is a division of biology which includes the study related to mycology,bacteriology,virology & other fields as well.
	The microorganism studied are protozoa, algae, bacteria & fungi. These organisms are very small & are not visible 
	through our naked eyes.  Generally, microbiology includes the study of immunology or immune system. Microorganisms 
	are useful for agriculture, subsurface pollution in soils, marine environments & industrial wastes.
	Those who are specialist in microbiology are known as microbiologists. Though,microbiology is considered as a 
	research oriented field, microbiologists investigate & discover the existance of organisms & the affect to our lives.
	<br><br>
	<div id="micro"> 
	</div>
  </div>  	
	<table class="table table-striped" style="width:100%;margin-left:10px">
    <caption><b><h3>Institutes offering Courses for Microbiology-</h3></b></caption>
     <thead>
      <tr>
	   	<th> Institute Name</th>
		<th> Course Offered</th>
		<th> Location</th>
      </tr>
	 </thead>
	 <tbody>
	  <tr>
        <td>A.D.N. Institute of Paramedical Science & Hospitals</td> 
	    <td> BSc<br>
		     MSc</td> 
		<td>Nagpur</td> 
      </tr>	
	   <tr>
        <td> A.K. Navajeevan College for Women</td> 
	    <td> BSc<br>
		     MSc</td> 
		<td>Hyderabad</td> 
      </tr>	
	   <tr>
        <td> A.M.G. Degree College for Women</td> 
	    <td> BSc</td> 
		<td> Guntur</td> 
      </tr>	
	   <tr>
        <td> A.Q.J. Degree College</td> 
	    <td>BSc</td> 
		<td>Vishakhapatnam </td> 
      </tr>	
	   <tr>
        <td>A.S. Government Degree College for Women</td> 
	    <td> BSc</td> 
		<td> East Godavari</td> 
      </tr>	
	   <tr>
        <td>A.S.M.R. Institute of Technology & Management</td> 
	    <td> BSc</td> 
		<td> Mathura</td> 
      </tr>	
	  <tr>
        <td>A.V.C. College</td> 
	    <td> BSc</td> 
		<td> Nagapattinam</td> 
      </tr>	
	  <tr>
        <td>A.V.K. First Grade College</td> 
	    <td> BSc</td> 
		<td> Bangalore</td> 
      </tr>	
	  <tr>
        <td>A.V.S. College of Arts & Science</td> 
	    <td> BSc</td> 
		<td> Ramalingapuram Salem (Tamil Nadu)</td> 
      </tr>	
	  <tr>
        <td>Academia Para la Education Professional</td> 
	    <td> BSc</td> 
		<td> Lucknow</td> 
      </tr>	
	 </tbody>
	</table>
	<br><br>
	<a href="microexams.php" style="color:blue;font-size:16px;">TO KNOW ABOUT ENTRANCE EXAMS OF COLLEGES FOR MICROBIOLOGY>>></a><br><br>
	<a href="micro.php" style="font-size:16px; color:blue;">TO KNOW ABOUT MICROBIOLOGY COURSES>>></a>