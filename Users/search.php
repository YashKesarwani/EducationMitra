<?php
$con=mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db");
$arr=Array();
$uid=$_GET["uid"];
$cmd="select * from register where uid='$uid'";
$rst=mysqli_query($con,$cmd);
while($row=mysqli_fetch_array($rst, MYSQL_ASSOC))
{	
	array_push($arr,$row);
}
echo  json_encode($arr);
?>