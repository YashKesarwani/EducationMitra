<?php
 session_start();
 $thispage="ask";
 include_once "Header.php";
 include "Validate.js";
?> 
 <title> Ask Experts </title>
<?php
$dir=opendir("Pics/experts");
while($file=readdir($dir)) 
{
  if($file!=".."&& $file!=".")
  {
    echo"<img id=expert src='Pics/experts/$file'>";
    }
  
  }
  ?>
  <div class="page-header" style=" margin-right:10px; background-color:orange;"> 
	<h2 style="font-family:Comic Sans MS;margin-left:50px;">Confused?..Dont know where your career is heading?...RELAX!!</h2>
	<h3 style="font-family:Comic Sans MS;margin-left:50px;">Our in-house Experts will answer all your 
	career queries. Consult our experts online for career guidance and get the BEST CAREER ADVICE for 
	a successful career. Just send in your queries to us along your contact details and you will soon get 
	the answer to all career related problems that are troubling you.
    <br><br>
    IMPORTANT-<br>
	 >>This service is only for Career related queries.<br>
	 >>This service is available on a no charge basis for a limited period of time.<br>
	<br><br>
	Your Query<br><br>
 
	
  <form  autocomplete="off" method="POST" action="querysub.php" style="width:400px; margin-left:60px">

	<center><input type="text" name="name" placeholder="Name" required class="form-control" >
		<br>
		<input type="email" name="email" placeholder="Email Id" required class="form-control" onblur="checkmail(this.value)">
		<br>
		<span id="chck1" ></span>
		<input type="number" name="contact" placeholder="Contact No." required class="form-control" onblur="checknum(this.value)">
		<br>
		<span id="chck2" ></span>
		<input type="text" name="address" placeholder="Address" required class="form-control">
		<br>
		<input type="text" style="height:70px;"name="query" placeholder="Query" required class="form-control">
		<br>		
		<input type="submit" name="SUBMIT">
  </form>		
  </div>	
  
<?php
 include "Footer.php";
?> 