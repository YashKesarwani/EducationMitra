<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
 <title> B.Tech  </title>
	
 <body>
 <hr>
 <div id="btech"> 
 </div>
 <div class="page-header" style="margin-left:10px; margin-right:10px; background-color:orange;word-spacing:4px; padding-left:4px;"> 
	<h2 style="font-family:Comic Sans MS">B.Tech </h2>
	<h4 style="line-height:22px;">Engineering is the discipline ,art, and profession that applies scientific theory to design, 
	 develop, and analyze technological solutions. In tne contemporary era, it is generally considered to 
	 consist of the major basic branches of chemical engineering, civil engineering, electrical engineering, 
	 mechanical engineering, and geological engineering.
	 <br>there are numerous other engineering subdisciplines and interdisciplinary subjects that are 
	 derived from concentrations , combinations, or extensions of the major engineering branches.
	 <br><br>
	</h4>
	<h3 style="font-family:Comic Sans MS; Text-decoration:underline">List Of Courses </h3>
	<h4 style="line-height:22px;">There are many types of b.tech programs that you can choose from-<br><br>
	 <b>-Chemical Engineering: </b>It is the application of chemical, physical, and biological 
	 sciences to the process of converting raw materials :or chemicals into more useful or valuable forms.
	 <br><br>
     <b>-Civil Engineering: </b>Civil engineering comprises the design, construction and management of 
	 the physical and natural built environments. <br><br>
	
	 <b>-Electrical Engineering </b>Electrical engineering comprises the study and application of 
	 electricity, electronics, and electromagnetism.<br><br>
	 <b>-Mechanical Engineering: </b>Mechanical engineering comprises the design, analysis and usage of 
	 heat and mechaniocal power for the operation of machines and mechanical systems.<br><br>
	 <b>-Software Engineering: </b>Software engineering is the and an application of engineering to the 
	 design, development,implementation and maintenance of software in a systematic method.<br><br>
	 <b>-System Engineering: </b>System engineering is an interdisciplinary field of engineering that 
	 focuses on how to design and manage complex engineering projects over their life cycles.
	 <br><br>
    </h4>
	<a href="b.techcolleges.php" style="font-size:16px;">TO KNOW ABOUT B.Tech COLLEGES>>></a><br><br>
	<a href="b.techexams.php" style="font-size:16px;">TO KNOW ABOUT ENTRANCE EXAMS FOR B.Tech>>></a>
  </div>
</body>
