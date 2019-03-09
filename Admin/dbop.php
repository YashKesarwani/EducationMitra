<?php
 session_start();
 include "check.php";
 $thispage="updatedb";
 include "Headeradm.php";
?>  
 <title> Settings </title>
 <link href="../bootstrap.min.css" rel="stylesheet">

 <div id="form" style="margin-top:50px; margin-left:20px; font-size:18px; text-align:left">
 <form method="GET" action="store.php">
<?php
 if($_GET["id"]=="news") 
  {
?>
    Enter New News
	<br>
    <input type="text" style="height:70px; width:400px;" name="news" placeholder="Insert News" 
	required class="form-control">
     <br>
	<input type="hidden" value="news" name="id">
     <br>	
    <button class="btn btn-info" style="background-color:orange"> INSERT </button>	
	
<?php
  }
  if($_GET["id"]=="city") 
  {
?> 
    Enter New City
	<br>
    <input type="text" style="height:70px; width:400px;" name="city" placeholder="Insert City" 
	required class="form-control">
     <br>
	<input type="hidden" value="city" name="id">
     <br>	
    <button class="btn btn-info" style="background-color:orange"> INSERT </button>

<?php
  }
  if($_GET["id"]=="course") 
  {
?> 
    Enter New Course
	<br>
    <input type="text" style="height:70px; width:400px;" name="course" placeholder="Insert Course" 
	required class="form-control">
     <br>
	<input type="hidden" value="course" name="id">
     <br>	
    <button class="btn btn-info" style="background-color:orange"> INSERT </button>

<?php
  }
  if($_GET["id"]=="college") 
  {
?>
    Enter New College Details
	<br>
	<input type="text" style="height:50px; width:400px;" name="collid" placeholder="Insert College ID" 
	required class="form-control">
	<br>
    <input type="text" style="height:70px; width:400px;" name="collname" placeholder="Insert College Name" 
	required class="form-control">
     <br>
	<input type="text" style="height:70px; width:400px;" name="colladdr" placeholder="Insert College Address" 
	required class="form-control">
     <br> 
	<input type="text" style="height:50px; width:400px;" name="collcourse" placeholder="Insert Course Offered" 
	required class="form-control">
     <br> 
	<input type="hidden" value="college" name="id">
     <br>	
    <button class="btn btn-info" style="background-color:orange"> INSERT </button>
	
<?php
  }
  if($_GET["id"]=="com") 
  {
?>  
	Enter New Course
	<br>
    <input type="text" style="height:70px; width:400px;" name="course" placeholder="Insert Course" 
	required class="form-control">
     <br>
	<input type="hidden" value="com" name="id">
     <br>	
    <button class="btn btn-info" style="background-color:orange"> INSERT </button>
<?php
  }		
  if($_GET["id"]=="coc") 
  { 
?>
    Enter New College ID
	<br>
    <input type="text" style="height:70px; width:400px;" name="colid" placeholder="College ID" 
	required class="form-control">
     <br>
	Enter New Course ID 
	<input type="text" style="height:70px; width:400px;" name="coid" placeholder="Course ID" 
	required class="form-control">
     <br> 
	<input type="hidden" value="coc" name="id">
     <br>	
    <button class="btn btn-info" style="background-color:orange"> INSERT </button>
<?php
  }		
  if($_GET["id"]=="exam") 
  { 
?>
    Enter New Exam Updates
	<br>
    <input type="text" style="height:70px; width:400px;" name="exam" placeholder="Enter New Updates" 
	required class="form-control">
     <br>
	<input type="hidden" value="exam" name="id">
     <br>	
    <button class="btn btn-info" style="background-color:orange"> INSERT </button>
<?php
  }
?> 
 
 </form>
 </div>
 
<?php
 include "Footeradm.php";
?>    