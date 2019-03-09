<?php
session_start();
include "check.php";
  $thispage="viewdb";
  include "Headeradm.php"; 
?>  
<html>
<head>
 <title> View Database </title>
<script src="../jquery.min.js"></script>
<script>
$(document).ready(function()
{	

	$("#a1").hide();
	$("#a2").hide();
	$("#a3").hide();
	$("#a4").hide();
	$("#a5").hide();
	$("#a6").hide();
	$("#a7").hide();
	$("#a8").hide();
	$("#a9").hide();
	
	$("#q1").click(function(){
	$("#a1").slideToggle(100);
	$("#a2").hide();
	$("#a3").hide();
	$("#a4").hide();
	$("#a5").hide();
	$("#a6").hide();
	$("#a7").hide();
	$("#a8").hide();
	$("#a9").hide();
	
	});
	
			
	$("#q2").click(function(){
	$("#a2").slideToggle();
	$("#a1").hide();
	$("#a3").hide();
	$("#a4").hide();
	$("#a5").hide();
	$("#a6").hide();
	$("#a7").hide();
	$("#a8").hide();
	$("#a9").hide();
	
	});

			
	$("#q3").click(function(){
	$("#a3").slideToggle();
	$("#a2").hide();
	$("#a1").hide();
	$("#a4").hide();
	$("#a5").hide();
	$("#a6").hide();
	$("#a7").hide();
	$("#a8").hide();
	$("#a9").hide();
	
	});
	
	$("#q4").click(function(){
	$("#a4").slideToggle();
	$("#a2").hide();
	$("#a3").hide();
	$("#a1").hide();
	$("#a5").hide();
	$("#a6").hide();
	$("#a7").hide();
	$("#a8").hide();
	$("#a9").hide();
	
	});
	
		
	$("#q5").click(function(){
	$("#a5").slideToggle();
	$("#a2").hide();
	$("#a3").hide();
	$("#a4").hide();
	$("#a1").hide();
	$("#a6").hide();
	$("#a7").hide();
	$("#a8").hide();
	$("#a9").hide();
	
	});	
	
	$("#q6").click(function(){
	$("#a6").slideToggle();
	$("#a2").hide();
	$("#a3").hide();
	$("#a4").hide();
	$("#a5").hide();
	$("#a1").hide();
	$("#a7").hide();
	$("#a8").hide();
	$("#a9").hide();
	
	});	
	
	$("#q7").click(function(){
	$("#a7").slideToggle();
	$("#a2").hide();
	$("#a3").hide();
	$("#a4").hide();
	$("#a5").hide();
	$("#a6").hide();
	$("#a1").hide();
	$("#a8").hide();
	$("#a9").hide();
	
	});	
	
	$("#q8").click(function(){
	$("#a8").slideToggle();
	$("#a2").hide();
	$("#a3").hide();
	$("#a4").hide();
	$("#a5").hide();
	$("#a6").hide();
	$("#a7").hide();
	$("#a1").hide();
	$("#a9").hide();
	
	});	
	
	$("#q9").click(function(){
	$("#a9").slideToggle();
	$("#a2").hide();
	$("#a3").hide();
	$("#a4").hide();
	$("#a5").hide();
	$("#a6").hide();
	$("#a7").hide();
	$("#a8").hide();
	$("#a1").hide();
	
	});	
	
});
</script></head>
<body>
<div class="container" style="text-align:center;">
	<p id=q1>View User Database </p>
	<P id=a1> <?php $id="user"; 
	  echo "<button><a href=view.php?id=$id>View</a></button>"; ?> 
	</p>

	<p id=q2>View Admin Database </p>
	<P id=a2> <?php $id="admin";
	  echo "<button><a href=view.php?id=$id>View</a></button>"; ?> 
	</p>

	<p id=q3>View College Database </p>
	<P id=a3> <?php $id="college";
	  echo "<button><a href=view.php?id=$id>View</a></button>"; ?> 
	</p>

	<p id=q4>View Courses Database</p>
	<P id=a4> <?php $id="course";
	  echo "<button><a href=view.php?id=$id>View</a></button>"; ?> 
	</p>

	<p id=q5>View City Database </p>
	<P id=a5> <?php $id="city";
	  echo "<button><a href=view.php?id=$id>View</a></button>"; ?> 
	</p>
	
	<p id=q6>View News Database </p>
	<P id=a6> <?php $id="news";
	  echo "<button><a href=view.php?id=$id>View</a></button>"; ?> 
	</p>
	
	<p id=q7>View Exam Database </p>
	<P id=a7> <?php $id="exam";
	  echo "<button><a href=view.php?id=$id>View</a></button>"; ?> 
	</p>
	
	<p id=q8>View Course_master Database </p>
	<P id=a8> <?php $id="com";
	  echo "<button><a href=view.php?id=$id>View</a></button>"; ?> 
	</p>
	
	<p id=q9>View Course_college Database </p>
	<P id=a9> <?php $id="coc";
	  echo "<button><a href=view.php?id=$id>View</a></button>"; ?> 
	</p>

</div>

<?php
 include "Footeradm.php";
?>   