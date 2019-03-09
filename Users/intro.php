<?php
 include "Menu.php";
 include "Connect.php";
 $obj=new register;
 $rst=$obj->sel($uid);
?>
<body style="background-color:#C8ECF7">
 <div style="float:left;">
  <img src="Upics/i2.jpg" height=400px; width=50%>
  <button type="button" class="btn btn-info"style="margin-left:10px;height:70px;width:200px;
   font-size:23px;font-family:Comic Sans MS;background-color:#FFFF5B; " >
  <a href="../Home.php?id=<?php echo $uid;?>">Start Exploring</a></button>
 </div>
 <div class="page-header" style=" position:absolute; left:550px; margin-right:10px; "> 
	<h2 style="font-family:Comic Sans MS;">Hello User <?php echo $rst;?> </h2>
	<h3 style="font-family:Comic Sans MS;">Welcome to EducationMitra.in...<br><br>
	  <h4 style="font-family:Comic Sans MS;">	Connecting you with unlimited CAREERS..COURSES..and COLLEGES..<br><br>
          Get Started Now-<br><br>
	  </h4>
		 <h5 style="font-family:Comic Sans MS;"> <b>>><?php echo "<a href='../Courses.php?id=$uid'>";?>EXPLORE COURSES </a><br><br>
		  >><?php echo "<a href='../College.php?id=$uid'>";?>FIND INSTITUTES</a> <br><br>
		  >><?php echo "<a href='../career.php?id=$uid'>";?>DISCOVER CAREERS</a> <br><br>
		  >><?php echo "<a href='../ask.php?id=$uid'>";?>ASK EXPERTS</a><br><br>
	</h3>	  
		  
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

<?php 
 include "Footer.php";