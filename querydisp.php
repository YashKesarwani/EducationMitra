<?php			
  $fp=fopen("Query.txt","r"); 
  echo "<font-size:25px;>";
	while(!(feof($fp)))
	 {
		echo fgets($fp)."<br>";
	 }
  echo "</font>"	 ;
?> 