<?php
  $feed=$_POST["feed"];
  $con=mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db");
  $cmd="select * from register where uid='$uid'";
  $res=mysqli_query($con,$cmd);
  $row=mysqli_fetch_array($res);
  $name=$row[1]." ".$row[2];
$fp=fopen("../Feeds.txt","a+");
fwrite($fp,"$name:- $feed\r\n");								
if(fclose($fp))
{
include "Logout.php";
}
?>	
