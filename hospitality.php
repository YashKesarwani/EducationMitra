<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
<title>Aviation</title>

 <body>
  <div class="page-header" style="margin-left:10px;margin-right:10px;background-color:orange; word-spacing:4px; padding-left:4px;"> 
	<h3 style="font-family:Comic Sans MS; font-size:25px; text-decoration:underline;">AVIATION</h3>
    <h4 style="line-height:24px;">It is the practical aspect or art of aeronautics, being the design, 
	 developmet, production, operation and use of aircraft, especially heavier than aircraft....<br>
	 Aviation in India refers to the aviation industry of India...It can broadly divided into-<br>
     >>>Military Aviation<br>
     >>>Civil Aviation<br>
	 The Bachelor of Aviation is a bachelor's degree for studies in the field of aviation. It takes 3 
	 years to complete the degree. This deree also trains students in<br>
	 >>Engineering and<br>
	 >>Electronics<br>
	 teaching students to run, fly, design, manage and operate aviation system all over the world.  			  
    </h4>
    <h3 style="font-family:Comic Sans MS;">Fields of Aviation</h3> 
	<h4 style="line-height:24px;">*Aerospace Engineering<br>
	                              *Air Traffic Controller<br>
								  *Airport Management and Administrator<br>
								  *Airport operation<br>
								  *Airport Security<br>
								  *Commercial Aviation<br>
								  *General Aviation<br>
								  *Flight Dispatcher<br>
								  *Flight Planning<br>
								  *Flight Training<br><br>
	</h4>
	<a href="hospitalitycolleges.php" style="font-size:16px;">TO KNOW ABOUT AVIATION COLLEGES>>></a><br>
 </div>