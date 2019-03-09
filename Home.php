<?php
session_start();
if(isset($_GET["task"]))
{
setcookie("cook","",time()-86400);
} 
 $thispage="home";
 include_once "Header.php";
 $counter_name = "counter.txt";
 if (!file_exists($counter_name)) 
 {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
 }
 $f = fopen($counter_name,"r");
 $counterVal = fread($f, filesize($counter_name));
 fclose($f);
 if(!isset($_SESSION['hasVisited']))
 {
  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f); 
 }
?> 
 <title>Home</title>
 <body>
 <div id="gallery"> 
  
  </div>  
  <div id="matter">
   Go Confidently In The Direction Of Your Dreams. <br> Live The Life You Have Imagined.
  </div>
  
  <div id="back1" style="width:100%; height:450px; position:absolute; top:780px; background-color:#C8ECF7; padding-top:25px; ">
   <div class="panel panel-default" id=d6>
	<div class="panel-heading" style="background-color:orange; color:white; 
	font-size:19px; text-align:center; height:60px;">CAREER AFTER 12th</div>
    <ul class="list-group">
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href=career.php style="color:black;font-size:15px">Science Stream</li>
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href=career.php style="color:black;font-size:15px">Arts & Humanities</a></li>
		<li class="list-group-item"style="background-color:#FFC68C; text-align:center"><a href=career.php style="color:black;font-size:15px">Commerce</a></li>
    </ul>
   </div>
   
   <div class="panel panel-default" id="news" style=" border-color:grey">
    <div class="panel-heading" style="background-color:orange; color:white; font-size:19px; text-align:center;">News Update</div>
	<marquee direction="up" style="border:0px solid red"> 
     <center><iframe src="Newsdisp.php" width=400px; frameborder="no" scrolling="no"> </iframe>  </center>
	</marquee>
   </div>
  </div>  
   
  <div id="back2" style="width:100%; height:315px; position:absolute; top:1231px; background-color:#B0E4F3; padding-top:25px;">
   <div id="d12" style="font-size:20px; margin-top:50px;">
	<div id="d7" style="background-color:orange; color:white; font-size:20px; text-align:center; border-radius:150px 150px 150px 150px">
	   <a href="http://www.iitb.ac.in/">IIT Bombay</a><br>
	 <img src="Pics/home/IITB.png" style="width:30px; height:30px"/>
	</div>
	 Powai, Mumbai, Maharashtra, 400076
   </div> 	
   
   <div id="d8" style="font-size:20px; margin-top:50px;">
    <div id="d9" style="background-color:orange; color:white; font-size:21px; text-align:center; border-radius:150px 150px 150px 150px">
	   <a href="http://www.christuniversity.in/">Christ University</a><br>
	 <img src="Pics/home/Christ.jpg" style="width:30px; height:30px"/>
	</div>
	 Hosur Road, Bangalore, Karnataka, 560029
   </div> 	
  
   <div id="d10" style="font-size:20px; margin-top:50px;">
    <div id="d11" style="background-color:orange; color:white; font-size:21px; text-align:center; border-radius:150px 150px 150px 150px">
	   <a href="http://www.aiims.edu/">AIIMS </a><br>
	 <img src="Pics/home/AIIMS.jpg" style="width:30px; height:30px"/>
	</div>
	 Ansari Nagar East, New Delhi, 110029
   </div> 	

   <div id="d20" style="font-size:20px; margin-top:50px;">
    <div id="d21" style="background-color:orange; color:white; font-size:21px; text-align:center; border-radius:150px 150px 150px 150px">
	   <a href="http://www.srmuniv.ac.in/">SRM University</a> <br>
	 <img src="Pics/home/SRM.png" style="width:30px; height:30px"/>
	</div>
	 Chennai, Tamil Nadu
  </div>
 </div> 
 <div id="back3" style="width:100%; height:315px; position:absolute; top:1535px; background-color:#B0E4F3; padding-top:25px; ">
  <div id="newd12" style="font-size:21px; ">
	<div id="d7" style="background-color:orange; color:white; font-size:21px; text-align:center; border-radius:150px 150px 150px 150px">
	   <a href="http://www.iitkgp.ac.in/">IIT Kharagpur</a><br>
	 <img src="Pics/home/IITK.png" style="width:30px; height:30px"/>
	</div>
	 Kharagpur, West Bengal, 721302
   </div> 	
   
   <div id="newd8" style="font-size:20px;">
    <div id="d9" style="background-color:orange; color:white; font-size:21px; text-align:center; border-radius:150px 150px 150px 150px">
	   <a href="http://www.vit.ac.in/">Vellore University</a><br>
	 <img src="Pics/home/VIT.png" style="width:30px; height:30px"/>
	</div>
	 Vellore Chennai, Tamil Nadu
   </div> 	
  
   <div id="newd10" style="font-size:20px;">
    <div id="d11" style="background-color:orange; color:white; font-size:21px; text-align:center; border-radius:150px 150px 150px 150px">
	   <a href="http://www.bhu.ac.in/">BHU </a><br>
	 <img src="Pics/home/BHU.jpg" style="width:30px; height:30px"/>
	</div>
	 Varanasi, Uttar Pradesh, 221005
   </div> 	

   <div id="newd20" style="font-size:20px;">
    <div id="d21" style="background-color:orange; color:white; font-size:21px; text-align:center; border-radius:150px 150px 150px 150px">
	   <a href="http://www.iimb.ernet.in/">IIM </a><br>
	 <img src="Pics/home/IIMB.png" style="width:30px; height:30px"/>
	</div>
	 Bengaluru, Karnataka, 560076
  </div> 
 
 </div>
 
 <div id="back4" style="width:100%; height:495px; position:absolute; top:1851px; padding-top:25px;  background-color:#C8ECF7; ">
  <div id="video" style="position:absolute; left:6%; float:left; padding-top:30px;">  
    <video width=500 height=280  controls  title="Motivational Video">
    <source src="Motivation.3gp"> 
  </div>	
  <div class="panel panel-default" id=feed style="margin-left:50px; height:350px; font-size:18px; position:absolute; left:55%; margin-top:30px; ">
    <div class="panel-heading" style="background-color:orange; color:white; 
						font-size:21px; text-align:center; ">
						FEEDBACKS
    </div>
    <iframe src="Feedsdisp.php" width=350 height=300 frameborder=3 scrolling="yes">
	  
    </iframe>  
  </div>	
 
 </body> 

<?php
 echo "<div id=visit style=\"position:absolute;top:701\">";
 echo "<h3>You are visitor number $counterVal to this site</h3>";
 echo "</div>"; 
 include "Footer.php";
?>   