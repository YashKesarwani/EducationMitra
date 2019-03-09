<?php
	include "Menu.php";	
	$uid=$_SESSION["userid"];
	include "Connect.php";
    $obj=new register;
    $rst=$obj->sel($uid);
?>
<title>Settings</title>
<body style="background-color:#C8ECF7">
	<div class="panel panel-default" style="width:900px; margin-left:20px; font-size:17px;">
	 <div class="panel-heading" style="height:80px;font-size:25px;font-family:Comic Sans MS; 
	    background-color:#AFF5E2"><b>Hi <?php echo $rst;?>!!</b>
	 </div>
		<?php
			if(isset($_GET["task"]))
			{ 
				echo "<br><font size=4 color=blue>Your Profile has been updated. Happy to Help You.</font>";
			}
		?>
     <ul class="list-group">
	    <li class="list-group-item"><?php echo "<a href='Update.php?id=$uid'>";?>Change Your Name<img src="Profile/e1.png" style="width:30px;height:30px"></a></li>
		<li class="list-group-item"><?php echo "<a href='Update.php?id=$uid'>";?>Change Your Password<img src="Profile/e1.png" style="width:30px;height:30px"></a></li>
		<li class="list-group-item"><?php echo "<a href='Update.php?id=$uid'>";?>Change Your Educational Interest<img src="Profile/e1.png" style="width:30px;height:30px"></a></li>
		<li class="list-group-item"><form method="POST" action="Upload.php" name="picupload" enctype="multipart/form-data" style="color:blue">
			Upload Your Pic
			<input type="file" name="upic" required><br>
			<button class="btn btn-info">Upload</button>	
			<br><br>
		  </form>	
		</li>
	 </ul>  
	</div>		 

	
<?php
	include "Footer.php";
?>