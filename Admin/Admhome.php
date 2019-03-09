<?php
  session_start();
  include "check.php";
  $thispage="home";
  include "Headeradm.php";
  include "Connect.php";
?>  
 <title> Admin Home Page </title>
 <style>
	img
	{ 
	 border-radius:35px 35px 35px 35px; 
	}
</style>
 <div id="wel">
    <?php
	  $name=$_SESSION["admin"];
	  $obj= new admin;
	  $ret=$obj->select($name);
	  $split=split("\,",$ret);
	?>
	<br>	
 </div>	
 <body style="background-image:url(APics/a1.png);background-repeat:no-repeat;background-position:center;">
	<div class="panel panel-default"style="width:300px; height:px; margin:8px;float:left;">
	 <div class="panel-heading"style="height:90px;font-size:30px;font-family:Comic Sans MS; 
	       background-color:#AFF5E2; font-size:20px;">
		   <?php  echo "<img src='".$split[4]. "' width=60 height=60>";
		   echo "<b>Hi ".$split[0]."!!</b>";?> 
	 </div>
     <ul class="list-group">
	    <li class="list-group-item"style="height:60px;font-size:20px"><b>Personal Information-</b></li>
		<li class="list-group-item" style="height:50px;">Phone no.:- <?php echo $split[1]; ?></li>
		<li class="list-group-item"style="height:50px;">Email id:- <?php echo $split[2]; ?></li>
		<li class="list-group-item"style="height:50px;">Current City:- <?php echo $split[3] ?></li>
	
	 </ul>  
	</div>

	<div class="panel panel-default" id=feed style="margin-left:50px; height:551px; font-size:18px; margin-top:8px; float:left">
	    <div class="panel-heading" style="background-color:#AFF5E2; font-size:21px; text-align:center; ">
						FEEDBACKS
	    </div>
	    <iframe src="../Feedsdisp.php" width=520 frameborder=3 scrolling="yes" style="height:500px">
	  
	    </iframe>  
    </div>
	
	<div class="panel panel-default" id=feed style="margin-left:50px; height:551px; font-size:18px; margin-top:8px; float:left">
	    <div class="panel-heading" style="background-color:#AFF5E2; font-size:21px; text-align:center; ">
						Queries
	    </div>
	    <iframe src="../querydisp.php" width=520 frameborder=3 scrolling="yes" style="height:500px">
	  
	    </iframe>  
    </div>

   <div class="panel panel-default" style="width:80px;position:fixed;right:0px;">
	 
     <ul class="list-group">
	    <li class="list-group-item"><?php echo "<a href='Admhome.php?id=$name'>";?><img src="APics/h1.jpg" style="width:60px;height:60px" title="Home"></a></li>
		<li class="list-group-item"><?php echo "<a href='Settings.php?id=$name'>";?><img src="APics/a2.png" style="width:60px;height:60px" title="Settings"></a></li>
		<li class="list-group-item"><?php echo "<a href='Registeradm.php?id=$name'>";?><img src="APics/a3.jpg" style="width:60px;height:60px" title="Register Admin"></a></li>
		<li class="list-group-item"><?php echo "<a href='viewdb.php?id=$name'>";?><img src="APics/a4.jpg" style="width:60px;height:60px" title="View Database"></a></li>
		<li class="list-group-item"><?php echo "<a href='Updatedb.php?id=$name'>";?><img src="APics/a5.png" style="width:60px;height:60px" title="Update Database"></a></li>
		<li class="list-group-item"><?php echo "<a href='Logout.php?id=$name'>";?><img src="APics/l1.jpg" style="width:60px;height:60px" title="Logout"></a></li>
	 </ul>  
	</div>		 
  </body>	

<?php
 include "Footeradm.php";
?>   
   