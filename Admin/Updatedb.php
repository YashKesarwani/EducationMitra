<?php
session_start();
include "check.php";
  $thispage="updatedb";
  include "Headeradm.php";
?>  
 <title> Update Databases </title>
<head>
 <style>
	#q1
	{
	 margin-top:200px;
	}
	#q1,#q2,#q3,#q4,#q5,#q6,#q7,#q8
	{
	 background-color:#8CDFDD;
	 color:black;
	 font-size:17px;	
	 font-weight:bold;
	 text-align:center;
	 height:40px;	
	 width:400px;
	 padding-top:6px;
	 border-bottom:1px solid black;
	 cursor:pointer;
	 margin-left:30%;
	}
	#a1,#a2,#a3,#a4,#a5,#a6,#a7,#a8
	{
	 width:398px;
	 font-size:17px;
	 height:50px;
	 margin-left:30%;
	 border:1px solid #8CDFDD;
	}
</style>
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
	
	
	$("#q1").click(function(){
	$("#a1").slideToggle(100);
	$("#a2").hide();
	$("#a3").hide();
	$("#a4").hide();
	$("#a5").hide();
	$("#a6").hide();
	$("#a7").hide();
	$("#a8").hide();
	
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
	
	});
});
</script></head>
<body>
<div class="container" style="text-align:center;">
	<p id=q1>Update News Database </p>
	<P id=a1> <?php  
	  echo "<button><a href=dbop.php?id=news>Update</a></button>"; ?> 
	</p>

	<p id=q2>Update City Database </p>
	<P id=a2> <?php 
	  echo "<button><a href=dbop.php?id=city>Update</a></button>"; ?> 
	</p>

	<p id=q3>Update Course Database </p>
	<P id=a3> <?php 
	  echo "<button><a href=dbop.php?id=course>Update</a></button>"; ?> 
	</p>

	<p id=q4>Update College Database</p>
	<P id=a4> <?php 
	  echo "<button><a href=dbop.php?id=college>Update</a></button>"; ?> 
	</p>

	<p id=q5>Delete from User Database </p>
	<P id=a5> <?php ;
	  echo "<button><a href=Deletedb.php>Delete</a></button>"; ?> 
	</p>
	
	<p id=q6>Update Collegemaster Database</p>
	<P id=a6> <?php 
	  echo "<button><a href=dbop.php?id=com>Update</a></button>"; ?> 
	</p>
	
	<p id=q7>Update Course_college Database</p>
	<P id=a7> <?php 
	  echo "<button><a href=dbop.php?id=coc>Update</a></button>"; ?> 
	</p>
	
	<p id=q8>Update Updatemaster Database</p>
	<P id=a8> <?php 
	  echo "<button><a href=dbop.php?id=exam>Update</a></button>"; ?> 
	</p>

</div>

<?php
 include "Footeradm.php";
?>   