<?php
 session_start();
 $thispage="college";
 include_once "Header.php";
?> 
 <title>College</title>
   <script>
    function getcourse(cou)
	 {
		var b=new XMLHttpRequest();
		b.open("GET", "getcollege.php?coname="+cou,true);
		b.send();
		b.onreadystatechange=function test2()
		{	
		if(b.readyState==4)
		 document.getElementById("list1").innerHTML=b.responseText; 
		}
	 }
	function  searchcol()
	{
	 var c=new XMLHttpRequest();
	 var col=document.getElementById("t1").value
	 c.open("GET","searchcol.php?coname="+col,true);
	 c.send();
	 c.onreadystatechange=function test3()
	 {
	   if(c.readyState==4)
		 document.getElementById("coldisp").innerHTML=c.responseText; 
	   else
		 document.getElementById("coldisp").innerHTML="Sorry..!! No Results Found.";	
	 }
	}
 </script>
 </head>
 <body>

  <div id="sel" style="width:300px; height:650px; font-size:20px; margin-top:20px; margin-left:50px; float:left">
Choose Your Course
 <input type="text" name="course" placeholder="Desired Course" list=list1 id="t1" required class="form-control" onkeyup="getcourse(this.value)" >
 <datalist id="list1"></datalist>
 <br>
 <button class="btn btn-info" onclick="searchcol()">Search</button>
 </div>
 <div id="coldisp" style="height:650px; width:300px; margin-top:20px; font-size:17px; float:left">
	Colleges Offering Your Desired Course
 </div>
 <br>
 <img src="Pics/course/iit_delhi.jpg" width=30% height=250px style="margin:10px;"><br>
  
 
 <table class="table table-striped" style="width:100%;margin-left:10px">
  <caption><b><h3>LIST OF COLLEGES IN INDIA-</h3></b></caption>
  <thead>
      <tr>
	  <th>Name of College</th>
	  <th>State</th>	  
  </tr>
  </thead>
  <tbody>
    <tr>
       <td> Mahatma Gandhi Government College </td> 
	   <td> Andaman and Nicobar </td> 
	</tr>
	<tr>
       <td> Government Medical College, Anantapur </td> 
	   <td> Andhra Pradesh </td> 
	</tr>
	<tr>
       <td> Diphu Government College </td> 
	   <td> Assam </td> 
	<tr>
	   <td> Indian Institute of Technology </td> 
	   <td> Bihar </td> 
	</tr>
	<tr>
	   <td> Jawaharlal Nehru Engineering College  </td> 
	   <td> Bihar </td> 
	</tr>
	<tr>
	   <td> Government College of Engineering and Technology, Jammu </td> 
	   <td> Jammu and Kashmir </td> 
	</tr>
	<tr> 
	   <td> Government Dental College, Bangalore </td> 
	   <td> Karnataka </td> 
	</tr>
	<tr>
	   <td> Government College, Chittur </td> 
	   <td> Kerala </td> 
	</tr>
	<tr> 
	   <td> Government Engineering College, Rewa </td> 
	   <td> Madhya Pradesh </td> 
	</tr>
	<tr>
	   <td> Government Law College, Mumbai </td> 
	   <td> Maharashtra  </td> 
	</tr>
	<tr>
	   <td> Government Autonomous College, Bhawanipatna </td> 
	   <td> Orissa  </td> 
	</tr>
	<tr>
	   <td> Government College of Education, Chandigarh </td> 
	   <td> Punjab  </td> 
	</tr>
	<tr>
	   <td> Government Medical College, Amritsar </td> 
	   <td> Punjab  </td> 
	</tr>
	<tr>
	   <td> Government Engineering College, Ajmer </td> 
	   <td> Rajasthan  </td> 
	</tr>
	<tr>
	   <td> Government Arts College, Coimbatore </td> 
	   <td> Tamil Nadu  </td> 
	</tr>
	<tr>
	   <td> Dr. Ambedkar Government Law College, Chennai </td> 
	   <td> Tamil Nadu  </td> 
	</tr>
	<tr>
	   <td> Government College of Architecture , Lucknow </td> 
	   <td> Uttar Pradesh </td> 
	</tr>
	<tr>
	   <td><b>and many more....</b></td>
	</tr>   
  </tbody>
 </table>
  
<?php
 include "Footer.php";
?>     