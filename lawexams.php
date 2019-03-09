<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
<title>Law</title>
   
 <body>
 <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange;word-spacing:4px; padding-left:4px;"> 
  <h4><b>The education of Law</b> in India is offered by various
	Universities & in various academic levels. The Law as an education offered in India in the year <b>1987</b> as a 
	three year degree programme granted the <b>Advocate Act,1961</b>. The BCI(Bar Council of India) is the main regulatory 
	body of law education.<br>
	The first law university in India was established in Bangalore named as <b>"National Law School of India 
	University"</b>, popularly known as NLS.
	<br>India has a great demand of skilled lawyers as per the surveys. Only 20% of Indian law students are eligible 
	to work in courts.<br><br>
	Law entrance tests are conducted on a national/state or university level for admission to law courses such as 
	BA LLB,LLM and others.
	Candidates have to appear in one or more of the exams on the basis of their college choices. 
  </h4> 	
 </div>
 <table class="table table-striped" style="width:75%;margin-left:10px;margin-right:50px">
 <caption style="color:black"><b><h3>LAW ENTRANCE TESTS</h3></b></caption>
  <thead>
    <tr>
	  <th style="background-color:#8CDFDD">Name of Exams</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td> All India Bar Exam (AIBE)</td>
	</tr>
	<tr>
      <td> All India Law Entrance Tests (AILET)</td>
	</tr>
	<tr>
      <td> Andhra Pradesh Law Common Entrance Test(AP LAWCET)</td>
	</tr>
	<tr>
      <td>Andhra Pradesh PG Law Common Entrance Test(AP PGLCET)</td>
	</tr>
	<tr>
      <td> Army institute of Law(AIL)Entrance Test</td>
	</tr>
	<tr>
      <td> BVP New Law College</td>
	</tr>
	<tr>
      <td>Calcutta University BA LLB Entrance Exam</td>
	</tr>
	<tr>
      <td> CEE Kerela LLM</td>
	</tr>
	<tr>
      <td> CEE Kerela LLB</td>
	</tr>
	<tr>
      <td> Christ University Law Entrance Test</td>
	</tr>
	<tr>
      <td> Delhi university LLB</td>
	</tr>
	<tr>
      <td>LSAT India</td>
	</tr>
	<tr>
      <td> MUCLET</td>
	</tr>
	<tr>
      <td> TS LAWCET & PGLCET</td>
	</tr>
	<tr>
      <td> Lloyd Law Entrance Test</td>
	</tr>
  </tbody>
 </table>
</body>
 <br><br>
	<a href="lawcolleges.php" style="color:blue; font-size:16px;">TO KNOW ABOUT LAW COLLEGES>>></a><br><br>
	<a href="lawcourse.php" style="color:blue; font-size:16px;">TO KNOW ABOUT LAW COURSES>>></a>   