<?php
session_start();
include "check.php";
 $thispage="register";
 include "Headeradm.php";
?>  
 <title> Register Admin </title>
 <div id="wel" style="font-size:22px; text-align:center;">
    <?php
	  $name=$_SESSION["admin"];
	  echo $name." Register a New Admin";
	  if(isset($_GET["task"]))
	  {echo "<br><font size=3>New Admin Added..!! Thank You ".$name."..!!</font>";}
	?>
	<br>
 </div>	
 <div id="form" style="font-size:18px; margin:20px; height:360px; width:400px; text-align:left">
 <form method="POST" action="Addadmin.php">
  Admin ID
  <input type="text" name="aid" value="A00" required class="form-control">
   <br>
  Admin Name
  <input type="text" name="aname" placeholder="Enter Name" required class="form-control">
   <br>
  Admin Password
  <input type="password" name="apass" placeholder="Enter Password" required class="form-control">
   <br>
  Admin Contact
  <input type="number" name="acontact" placeholder="Enter Contact No." required class="form-control">
   <br>
  Admin Email
  <input type="email" name="amail" placeholder="Enter Email ID" required class="form-control">
   <br> 
  Admin City
  <input type="text" name="acity" placeholder="Enter City" required class="form-control">
   <br>   
  <button class="btn btn-primary"> Register </button>  
 </form> 
 </div>
<?php
  include "Footeradm.php";
?>  