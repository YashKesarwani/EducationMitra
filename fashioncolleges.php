<?php
 session_start();
 if(empty($_SESSION["userid"]))							
	 header("Location:Login.php");
 $thispage="courses";
 include_once "Header.php";
?> 
<title>Fashion Designing </title>

 <body>
 <div class="page-header" style="margin-left:10px;margin-right:10px; background-color:orange; 
            word-spacing:4px; padding-left:4px; padding-top:10px;"> 
	<h4 style="line-height:22px;">Fashion designing offers plenty of opportunities for enthusiastic, talented & hardworking 
	 youngsters. Prospects for fashion design graduates are pretty good thanks to the still growing demand 
	 for "Designer Wear" & the equally large volume of exports.
	 <br><br>
	 The field is for those who have an eye for <b> STYLE, FASHION, TREND, CREATIVITY, ORIGINALITY and 
	 above all a KNACK FOR PROMOTING THEIR CREATIONS....</b>
	 <br><br>
	 There are various fashion courses in  India at various levels, such as diploma, certificate courses, 
	 undergraduate & postgraduate.
	 One can do specialisation in one of the fields that are provided in fashion designing as per his/her 
	 interest.
	 <div id="design">
	 </div>
    </h4> 
  </div>
 <table class="table table-striped" style="width:75%;margin-left:10px;margin-right:10px">
 <caption style="color:black"><b><h3>TOP 10 FASHION DESIGNING COLLEGES IN INDIA-</h3></b></caption>
 <thead>
    <tr>
	  <th style="background-color:#8CDFDD">Rank</th>
	  <th style="background-color:#8CDFDD">Name of College</th>
	  <th style="background-color:#8CDFDD">Address</th>
	</tr>
 </thead>
 <tbody>
    <tr>
       <td>sponsored</td> 
	   <td>WLC COLLEGE</td> 
	   <td>Delhi,Bangalore, Chennai, Hyderabad, Kolkata, Surat, Pune, Mumbai, Greater Noida</td> 
	</tr>
	<tr>
       <td>sponsored</td> 
	   <td>Vogue Institute of Fashion Technology</td> 
	   <td>No.4,Anand Towers,3rd Floor,Opp. to PF Building,Rajaram Mohan Roy Road, Richmond Circle, Bangalore, Karnataka</td> 
	</tr>
	<tr>
       <td>1</td> 
	   <td>NIFT,Delhi</td> 
	   <td>NIFT Campus,Hauz Khas,Opp. Gulmohar Park,Delhi.</td> 
	</tr>
	<tr>
       <td>2</td> 
	   <td>Pearl Academy,Delhi</td> 
	   <td>A-21/13,Nairaina Industrial Area,Phase II,Delhi.</td> 
	</tr>
	<tr>
       <td>3</td> 
	   <td>NIFT,Mumbai</td> 
	   <td>Plot No.15,Sector 4,Kharghar,Mumbai</td> 
	</tr>
	<tr>
       <td>4</td> 
	   <td>NIFT,Bangalore</td> 
	   <td>NIFT Campus,Sector-1,27th main,HSR Layout,Bangalore</td> 
	</tr>
	<tr>
       <td>5</td> 
	   <td>NIFT,Hyderabad</td> 
	   <td>Opp. Hitech city,Madhapur,Hyderabad</td> 
	</tr>
	<tr>
	   <td>6</td> 
	   <td>Symbiosis Institute of Design</td> 
	   <td>SVC Campus,New Airport road,Vimabn Nagar,Pune,Maharashtra</td> 
	</tr>
	<tr>
       <td>7</td> 
	   <td>NIFT,Chennai</td> 
	   <td>NIFT Campus,Salai,Taramani,Chennai.</td> 
	</tr>
	<tr>
       <td>8</td> 
	   <td>NIFT,Kolkata</td> 
	   <td>Plot-3B,Near Water tank,sector III,Salt Lake City,Kolkata.</td> 
	</tr>
	<tr>
       <td>9</td> 
	   <td>NIIFT,Mohali</td> 
	   <td>Industrial Area,Mohali</td> 
	</tr>
	<tr>
       <td>10</td> 
	   <td>Pearl Academy,Jaipur</td> 
	   <td>Industrial Area,Delhi Road,Kukas,Jaipur.</td> 
	</tr>
 </tbody>
 </table>
 <br><br>
 <a href="fashionexams.php" style="color:blue; font-size:16px;">TO KNOW ABOUT ENTRANCE EXAMS OF COLLEGES OF FASHION DESIGNING>>></a><br><br>
 <a href="fashion.php" style="color:blue; font-size:16px;">TO KNOW ABOUT FASHION DESIGNING>>></a>
 </body>
 
 