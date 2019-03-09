<?php
	include "Menu.php";
	include "Connect.php";
	echo "<br>";
	$uid=$_GET["id"];
	$obj= new register;
	$ret=$obj->select($uid);
	$split=split("\,",$ret);
	
?>
<title>Profile</title>
<style>
	img
	{ 
	 border-radius:35px 35px 35px 35px; 
	}
</style>
<body style="background-color:#C8ECF7">
	<div class="panel panel-default"style="width:300px; margin:8px;float:left;">
	 <div class="panel-heading"style="height:80px;font-size:30px;font-family:Comic Sans MS; 
	       background-color:#AFF5E2; font-size:20px;">
		   <?php  echo "<img src='".$split[6]."' width=60 height=60>";
		   echo "Hi ".$split[0]."!!";?> 
	 </div>
     <ul class="list-group">
	    <li class="list-group-item"style="height:50px;font-size:20px"><b>Personal Information-</b></li>
		<li class="list-group-item">Phone no.:- <?php echo $split[1]; ?></li>
		<li class="list-group-item">Email id:- <?php echo $split[2]; ?></li>
		<li class="list-group-item">Current City:- <?php echo $split[3]; ?></li>
	    
	    <li class="list-group-item"style="height:50px;font-size:20px"><b>Interest-</b></li>
		<li class="list-group-item">Desired-Course:- <?php echo $split[4]; ?></li>
		<li class="list-group-item">Educational Interest:- <?php echo $split[5]; ?> </li>
	 </ul>  
	</div>
	
	<div class="panel panel-default" id="news" style="width:300px; height:260px; margin-top:8px; 
	            margin-left:35px; float:left;">
      <div class="panel-heading" style="background-color:#AFF5E2; font-size:19px; text-align:center;">News Update</div>
      <marquee direction="up"> 
      <center><iframe src="../Newsdisp.php" width=300px; frameborder="no" scrolling="no"> </iframe>  </center>
      </marquee>
    </div>
	
	<div class="panel panel-default" id="news" style="width:300px; height:260px; margin-top:8px; 
	            margin-left:35px; float:left;">
      <div class="panel-heading" style="background-color:#AFF5E2; font-size:19px; text-align:center;">Upcoming Exams</div>
      <marquee direction="up"> 
      <center><iframe src="../updatedisp.php" width=300px; frameborder="no" scrolling="no"> </iframe>  </center>
      </marquee>
    </div>
	
	<div class="panel panel-default" style="width:80px;position:fixed;right:0px;">
	 <ul class="list-group">
	    <li class="list-group-item"><?php echo "<a href='intro.php?id=$uid'>";?><img src="Profile/h1.jpg" style="width:60px;height:60px" title="My Page"></a></li>
		<li class="list-group-item"><?php echo "<a href='Profile.php?id=$uid'>";?><img src="Profile/u2.png" style="width:60px;height:60px" title="Profile"></a></li>
		<li class="list-group-item"><?php echo "<a href='Settings.php?id=$uid'>";?><img src="Profile/s1.png" style="width:60px;height:60px" title="Settings"></a></li>
		<li class="list-group-item"><?php echo "<a href='Update.php?id=$uid'>";?><img src="Profile/e1.png" style="width:60px;height:60px" title="Update"></a></li>
		<li class="list-group-item"><?php echo "<a href='Logout.php?id=$uid'>";?><img src="Profile/l1.jpg" style="width:60px;height:60px" title="Logout"></a></li>
	 </ul>  
	</div>		  
</body>	
   
<?php
 include "Footer.php";
?>