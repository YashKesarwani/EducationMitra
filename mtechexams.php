<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> M.Tech Entrance Exams </title>
	
 <body>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange;word-spacing:4px; padding-left:4px;"> 
  <h2 style="font-family:Comic Sans MS">M.Tech </h2>
  <h4>A number of entrance exams are conducted  in the country for the admission of engineering students 
   in the  different M.tech programs. The most important & famous among them is the GATE or the Graduate 
   Aptitude Test in engineering. Students aspiring to pursue M.tech from the Indian Institute Of Technology
   orthe IIT's need to score high in this examination.
   <br>Apart from this, following are same of the other major M.tech entrance examination India like:
  </h4> 
  <h3>AIEEE, GATE, VITEEE..etc</h3>
  <br>
 </div> 
 <table class="table table-striped" style="width:100% ;margin-left:10px">
 <caption><b><h3>MAJOR M.TECH ENTRANCE EXAMS-</h3></b></caption>
 <thead>
      <tr>
	  <th>Entrance Exam</th>
	 
  </tr>
</thead>
<tbody>
   <tr>
       <td> All India Engineering Entrance exam   </td> 
	  
   </tr>
   <tr>
	  <td> Bharath University Engineering Entrance Exam(B.E.E.E) </td> 
	  
   </tr>
   <tr>
       <td> B.I.T. or Mersra,Ranchi  </td> 

   </tr> 
   <tr>
      <td> B.I.T.S.A.T. or Birla Institute Of Science And Technology    </td> 
	   
   </tr>
   <tr>
       <td> G.A.T.E.</td> 
	  
   </tr>
   <tr>
       <td> Manipal institute Of technology   </td> 
	  
   </tr>
   <tr>
       <<td> D.A.IICT Entrance Examination    </td> 
	   
   </tr>
   <tr>
       <td> DhiruBai AmBani Institute Of Information and Communication Technology   </td> 
	   
   </tr>	  
   <tr>
       <td> Kalinga Institute Of Industrial Technology  </td> 
	   
   </tr>
 <tr>
       <td> Manipal Institute Of Technology In Karnatak  </td> 
	  
   </tr>
 <tr>
       <td>Motilal Nehru National institute of Technology In AllahaBad </td> 
	  
   </tr>
 <tr>
       <td> B.H.U </td> 
 </tr>    
<tbody>
</table>
 </body>
 <br><br>
	<a href="mtechcolleges.php" style="color:blue; font-size:16px;">TO KNOW ABOUT M.TECH COLLEGES>>></a><br><br>
	<a href="mtechcourse.php" style="color:blue; font-size:16px;">TO KNOW ABOUT M.TECH COURSES>>></a>