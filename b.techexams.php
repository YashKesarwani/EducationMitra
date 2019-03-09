<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title>B.Tech</title>
	
 <body>
 <hr>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange;word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS">B.Tech </h2>
	<h4>Engineering is one of the most sought after career field in India. Come rain or sun, sitting in 
	 engineering entrance exams, either for one's own interest in the  field or to satisfy one's parents,
	  are a must for almost every Indian student.
	 <br>
	 <b>Listed below are the top 10 engineering entrance exams in the country like
	 </h4> 
	 <h3>JEE MAIN, JEE ADVANCED, BITSAT, VITEEE, WBJEE..etc</h3>
	 </b>
	 </br>
 </div> 
 <table class="table table-striped" style="width:100%;margin-left:10px">
 <caption><b><h3>NATIONAL LEVEL B.TECH ENTRANCE EXAMS-</h3></b></caption>
  <thead>
    <tr>
	  <th>Entrance Exam</th> 
	  <th>Eligibility</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td> JEE MAINS & JEE ADVANCED    </td> 
	  <td> Passed in 12th  </td> 
    </tr>
    <tr>
	  <td> Birla Institute Of Technology & Science Admission Test(BITSAT) </td> 
	  <td> 75% in 12th  </td> 
    </tr>
    <tr>
      <td> VIT Engineering Entrance Examination   </td> 
	  <td> 60% in 12th PCB/PCM  </td> > 
    </tr>
    <tr>
      <td> West Bengal Joint Entrance Examination    </td> 
	  <td> Passed in 12th  </td> 
    </tr>
    <tr>
      <td> Maharashtra Common Entrance Test(MHTCET)</td> 
	  <td> 50% in 12th  </td> 
    </tr>
    <tr>
      <td> Karnataka Common Entrance Test(KCET)   </td> 
	  <td> 45% in 12th PCM  </td> 
    </tr>
    <tr>
      <td> Agriculture & Medical Common Entrance Test(EAMCET)    </td> 
	  <td> 45% in 12th  </td> 
    </tr>
    <tr>
      <td> Uttar Pradesh State Entrance Exam(UPSEE)   </td> 
	  <td> 45% in 12th  </td> 
    </tr>	  
    <tr>
      <td> Kalinga Institute Of Industrial Technology Entrance Examination   </td> 
	  <td> 60% in 12th with PCM  </td> 
    </tr>	   
  <tbody>
 </table><br><br>
 </body>
 <a href="b.techcolleges.php" style="font-size:16px;color:blue;">TO KNOW ABOUT B.Tech COLLEGES>>></a><br><br>
 <a href="b.techcourse.php" style="font-size:16px;color:blue;">TO KNOW ABOUT B.Tech COURSES>>></a><br><br>