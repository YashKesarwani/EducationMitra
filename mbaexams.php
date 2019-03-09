<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> MBA Exams </title>
	
 <body>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange;word-spacing:4px; padding-left:4px;"> 
<h2 style="font-family:Comic Sans MS">MBA </h2>
<h4>is a master's degree in management and business administration. Business economy growth and demand for an MBA postgraduate
has enlarged proportionally across the globe. To get admissions into the top management institute to hunt MBA degree, you have to take up MBA
entrance examinations that are conducted all over the nation. Top MBA institutions in India include<b> IIM's, IIFT, FMS </b>and many more.  
<br>MBA entrance exam are set with an objective to find the ability and his or her aptitude to take admission in an administration program. The most significant & respected 
MBA entrance exams in India are-<br><b><center><h3>CAT, ATMA, IBSAT, XAT, MAT, SNAP, JMET..etc</center></b><br>
<h3 style="font-family:Comic Sans MS">Eligibility for MBA Entrance Exams-</h3>
<h4>A bachelor's degree under 10+2+3 scheme from a renowned academy or a deemed university with at least 50% marks(40% for reserved groups)
Applicants in bachelor's degree appearing for final year examination are also qualified for MBA.
  </h4>
 </div>
 <table class="table table-striped" style="width:100%;margin-left:10px">
 <caption><b><h3>NATIONAL LEVEL MBA ENTRANCE EXAMS-</h3></b></caption>
 <thead>
      <tr>
	  <th>Entrance Exam</th>
	  <th>Institute</th>
	  <th>Eligibility</th>
  </tr>
</thead>
<tbody>
   <tr>
       <td> CAT     </td> 
	   <td>Indian Institute of Management     </td> 
	   <td> 50% in Graduation  </td> 
   </tr>
   <tr>
	   <td> IRMA    </td> 
	   <td>Institute of Rural Management Anand    </td> 
	   <td> 50% in Graduation  </td> 
   </tr>
   <tr>
       <td> IIFT  </td> 
	   <td>Indian Institute of Foreign Trade   </td> 
	   <td> 50% in Graduation  </td> 
   </tr>
   <tr>
       <td> MAT     </td> 
	   <td> All India  Management Association     </td> 
	   <td>  Graduation in any discipline </td> 
   </tr>
   <tr>
       <td> SNAP</td> 
	   <td>Symbiosis International University     </td> 
	   <td> 50% in Graduation  </td> 
   </tr>
   <tr>
       <td> CAT     </td> 
	   <td>Indian Institute of Management     </td> 
	   <td> 50% in Graduation(regular degree) </td> 
   </tr>
   <tr>
       <td> IBSAT    </td> 
	   <td>ICFAI    </td> 
	   <td> 50% in Graduation  </td> 
   </tr>
   <tr>
       <td> NMAT    </td> 
	   <td>NMIMS    </td> 
	   <td> 50% in Graduation  </td> 
   </tr>	  
   <tr>
       <td> XAT</td> 
	   <td>XLRI,Jamshedpur   </td> 
	   <td> 50% in Graduation  </td> 
   </tr>	  
   <tr>
       <td> TISS    </td> 
	   <td>Tata Institute of Social Sciences</td>
	   <td> 50% in Graduation  </td> 
   </tr>
   <tr>
       <td> ATMA    </td> 
	   <td>Association of Indian Management Studies   </td> 
	   <td> 50% in Graduation  </td> 
   </tr>
   <tr>
       <td> CMAT   </td> 
	   <td>AICTE  </td> 
	   <td> 50% in Graduation  </td> 
   </tr>	   
  </tbody>
</table>  
<hr>
<table class="table table-striped" style="width:100%;margin-left:10px">
 <caption><b><h3>NATIONAL LEVEL TESTS-</h3></b></caption>
 <thead>
   <tr>
	  <th>Entrance Exam</th>
	  <th>Institute</th>
	  <th>Eligibility</th>
  </tr>
</thead>
<tbody>
   <tr>
       <td> MAHCET  </td> 
	   <td>Directorate of Technical education,Maharashtra State  </td> 
	   <td> 45% in Graduation  </td> 
   </tr>
   <tr>
       <td> CUSAT </td> 
	   <td>Cochin University of Science & Technology </td> 
	   <td>  Graduation  </td> 
   </tr>
   <tr>
       <td> PAMCAT  </td> 
	   <td>GNDU,Amritsar/PTU,Jalandhar/Punjab University,Patiala </td> 
	   <td> Graduation  </td> 
   </tr>
   <tr>
       <td> TANCET  </td> 
	   <td>Anna University,Chennai  </td> 
	   <td> 50% in Graduation  </td> 
   </tr>	 
   <tr>
       <td> UP-SEE </td> 
	   <td>UP Technical University  </td> 
	   <td> 45% in Graduation  </td> 
	   </tr>
   <tr>
       <td> Orissa JEE </td> 
	   <td>Orissa JEE </td> 
	   <td> Graduation  </td> 
   </tr>	
   <tr>
       <td> RMAT </td> 
	   <td>Rajasthan Technical University  </td> 
	   <td> 50% in Graduation  </td> 
   </tr>	
   <tr>
       <td> OCET </td> 
	   <td>Punjab University,Chandigarh  </td> 
	   <td> Graduation  </td> 
   </tr>
<tbody>
</table>
	<br><br>
	<a href="mbacolleges.php" style="font-size:16px; color:blue">TO KNOW ABOUT MBA COLLEGES>>></a><br><br>
	<a href="mbacourse.php" style="font-size:16px; color:blue">TO KNOW ABOUT MBA COURSES>>></a>