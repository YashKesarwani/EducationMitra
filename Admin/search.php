<?php
$con=mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db");
$arr=Array();
$aid=$_GET["aid"];
$cmd="select * from admin where aid='$aid'";
$rst=mysqli_query($con,$cmd);
while($row=mysqli_fetch_array($rst, MYSQL_ASSOC))
{	
	array_push($arr,$row);
}
echo  json_encode($arr);
?>