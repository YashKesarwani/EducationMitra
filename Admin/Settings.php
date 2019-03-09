<?php
session_start();
include "check.php";
  $thispage="settings";
  include "Headeradm.php";
?>  
 <title> Settings </title>
 <div id="wel">
    <?php
	  $name=$_SESSION["admin"];
	  $con=mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db");
	  $cmd="select * from admin where aname='$name'";
	  $res=mysqli_query($con,$cmd);
	  $row=mysqli_fetch_array($res);
	  $aid=$row[0];
	  if(isset($_GET["task"]))
	  {
	     if($_GET["task"]=="news")
		{ echo "<br><font size=3>New News Inserted. Thank You..!!</font>";}
	    else if($_GET["task"]=="city")
		{ echo "<br><font size=3>New City Inserted. Thank You..!!</font>";}
        else if($_GET["task"]=="course")
		{ echo "<br><font size=3>New Course Inserted. Thank You..!!</font>";}
		else if($_GET["task"]=="college")
		{ echo "<br><font size=3>New College Inserted. Thank You..!!</font>";}
		else if($_GET["task"]=="com")
		{ echo "<br><font size=3>New Course Inserted. Thank You..!!</font>";}
		else if($_GET["task"]=="coc")
		{ echo "<br><font size=3>New College ID & Course ID Inserted. Thank You..!!</font>";}
		else if($_GET["task"]=="exam")
		{ echo "<br><font size=3>New Updates Inserted. Thank You..!!</font>";}	
	  } 
	?>  
	<br>
 </div>
<div class="panel panel-default" style="width:900px; margin-left:150px;text-align:center;">
	 <div class="panel-heading" style="height:80px;font-size:30px;font-family:Comic Sans MS; 
	    background-color:#AFF5E2;text-align:left;"><b> <?php  echo "Hi ".$name;?>!!</b>
	 </div>
		<?php
			 if($_GET["task"]=="pic")
			 { 
				echo "<br><font size=4 color=blue>Your Profile has been updated.</font>";
			 }
		?>
     <ul class="list-group">
	    <li class="list-group-item" style="height:50px;font-size:17px;font-family:Comic Sans MS;"> <a href="Change.php?id=<?php echo $aid; ?>">Change Your Name</a></li>
		<li class="list-group-item" style="height:50px;font-size:17px;font-family:Comic Sans MS;"><a href="Change.php?id=<?php echo $aid; ?>">Change Your Password</a></li>
		<li class="list-group-item" style="height:50px;font-size:17px;font-family:Comic Sans MS;"><a href="viewdb.php">View from Databases</a></li>
		<li class="list-group-item" style="height:50px;font-size:17px;font-family:Comic Sans MS;"><a href="dbop.php?id=news">Update News Database</a></li>
		<li class="list-group-item" style="height:50px;font-size:17px;font-family:Comic Sans MS;"><a href="dbop.php?id=city">Update City Database</a></li>
		<li class="list-group-item" style="height:50px;font-size:17px;font-family:Comic Sans MS;"><a href="dbop.php?id=course">Update Course Database</a></li>
		<li class="list-group-item" style="height:50px;font-size:17px;font-family:Comic Sans MS;"><a href="dbop.php?id=college">Update College Database</a></li>
		<li class="list-group-item" style="height:50px;font-size:17px;font-family:Comic Sans MS;"><a href="dbop.php?id=exam">Update Updates Database</a></li>
		<li class="list-group-item" style="height:50px;font-size:17px;font-family:Comic Sans MS;"><a href="dbop.php?id=com">Update Coursemaster Database</a></li>
		<li class="list-group-item" style="height:50px;font-size:17px;font-family:Comic Sans MS;"><a href="dbop.php?id=coc">Update course_college Database</a></li>
		<li class="list-group-item" style="height:50px;font-size:17px;font-family:Comic Sans MS;"><a href="Deletedb.php">Delete from User Database</a></li>
		<li class="list-group-item" style="height:50px;font-size:17px;font-family:Comic Sans MS;"><a href="Registeradm.php">Register New Admin</a></li>
		<li class="list-group-item" style="height:100px;font-size:17px;font-family:Comic Sans MS;"> <form method="POST" action="Upload.php" name="picupload" enctype="multipart/form-data" style="color:blue">
			Upload Your Pic
			<br>
			<input type="file" name="apic" required>
			<button class="btn btn-info">Upload</button>	
			<br><br>
		 </form>	
		</li>
	 </ul>  
	</div>		 
 
 
  
<?php
  include "Footeradm.php";
?>    