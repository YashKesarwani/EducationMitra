<?php
session_start();
include "check.php";
$thispage="settings";
include "Headeradm.php";
?>  
 <title> Delete</title>
<?php
$uid=$_GET["uid"];
$con=mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db");
$cmd="delete from register where uid='$uid'";
if(mysqli_query($con,$cmd))
header("Location:Deletedb.php?task=OK");
?>


<!--Delete from database-->