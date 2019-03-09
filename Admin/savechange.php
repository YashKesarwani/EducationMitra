<?php
 $aid=$_GET["id"];
 $aname=$_POST["aname"];
 $apass=sha1($_POST["apass"]);
 $acontact=$_POST["acontact"];
 $aemail=$_POST["aemail"];
 $acity=$_POST["acity"];
 $con=mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db");
 $cmd="update admin set aname='$aname', apass='$apass', acontact='$acontact', aemail='$aemail', acity='$acity'
 where aid='$aid'";
 if(mysqli_query($con,$cmd))
  {
    header("Location:Settings.php?task=pic");
  }
?>  

<!--updating admin data-->