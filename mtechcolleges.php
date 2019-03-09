<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
  <title> M.tech Colleges </title>
	
 <body>
 <div id="btech"> 
 </div>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange"> 
	<h2 style="font-family:Comic Sans MS">Master Of Technology</h2>
	<h4>A Master of engineering or Master of Technology degree can be either an academic or professional 
	 master's degree in the field of engineering.
	 <br>
	 In India, a master of engineering or Master of technology or Master of science in technology or 
	 master of science in engineering degree is a postgraduate program in engineering or technology field.
	  This is generally a 2-year specialization program in a specific branch of engineering or a 
	  technical field.
	</h4>  
 </div>
 <table class="table table-striped" style="width:100%;margin-left:10px; text-transform:Capitalize;">
 <caption><b><h3>TOP M.TECH COLLEGES IN INDIA-</h3></b></caption>
 <thead>
      <tr>
	  <th>Name of Institute</th>
	  <th>City</th>
	  <th>Rank</th>
  </tr>
</thead>
<tbody>
<tr>
     <td> Indian institute of tehnology Bombay  </td> 
	   <td>Bombay </td> 
	   <td> 1</td> 
	   </tr>
	   <tr>
     <td> Indian institute of technology delhi </td> 
	   <td>New Delhi </td> 
	   <td> 2  </td> 
	   </tr>
	   <tr>
     <td> Indian institute of technology Kanpur  </td> 
	   <td>Kanpur </td> 
	   <td> 3  </td> 
	   </tr>
	   <tr>
     <td> Indian institute of technology Kharagpur  </td> 
	   <td>Kharagpur </td> 
	   <td> 4  </td> 
	   </tr>
   <tr>
     <td> Indian institute of technology madras </td> 
	   <td> Chennai</td> 
	   <td> 5  </td> 
	   </tr>
<tr>
     <td> Indian institute of technology Roorkee  </td> 
	   <td>Roorkie </td> 
	   <td> 6  </td> 
	   </tr>
	     <tr>
	   <td>Indian institute of technology BHU   </td> 
	   <td>Varanasi </td> 
	   <td> 7  </td> 
	   </tr>
	   <tr>
     <td> Indian school of mines(ISM) </td> 
	   <td>Dhanbad,jharkhand </td> 
	   <td> 8 </td> 
	   </tr>
<tr>
     <td> Jadavpur university </td> 
	   <td>Kolkata</td> 
	   <td> 9  </td> 
	   </tr>
	   <tr>
     <td> Motilal nehru institiute of technology </td> 
	   <td>Allahabad </td> 
	   <td> 10  </td> 
	   </tr>
	   <tr>
     <td> PEC university of technology vidya path </td> 
	   <td>Chandigarh </td> 
	   <td> 11  </td> 
	   </tr>
	   <tr>
     <td> bengal engineering & science university </td> 
	   <td>Howrah,west bengal </td> 
	   <td> 12 </td> 
	   </tr>
	   <tr>
	   <td>Malviya national institiute of technology </td> 
	   <td>Jaipur, rajasthan </td> 
	   <td> 13  </td> 
	   </tr>
	   	   <tr>
	   <td>Thapar university </td> 
	   <td>Patiala,punjab </td> 
	   <td> 14  </td> 
	   </tr>
	   	 
	   	   <tr>
	   <td> National institiute of technology </td> 
	   <td>Orrisa </td> 
	   <td> 15  </td> 
	   </tr>
	   </tbody>
	   </table>
	  <br><br>
	  <a href="mtechexams.php" style="font-size:16px; color:blue">TO KNOW ABOUT ENTRANCE EXAMS FOR M.TECH>>></a><br><br>
	  <a href="mtechcourse.php" style="color:blue; font-size:16px;">TO KNOW ABOUT M.TECH COURSES>>></a>
	
