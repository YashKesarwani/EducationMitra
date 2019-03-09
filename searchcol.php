<?php
 echo "<ul>";
 $coname=$_GET["coname"];
 $con=mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db");
 $comd="select * from coursemaster where coname like '$coname'";
 $res=mysqli_query($con, $comd);
 $row=mysqli_fetch_array($res);
 $cou=$row[0];
 $coud="select * from course_college where coid='$cou'";
 $result=mysqli_query($con,$coud);
 while($ro=mysqli_fetch_array($result))
 {
 $col=$ro[0];
 $cold="select * from college where colid='$col'";
 $rst=mysqli_query($con, $cold);
 while($rcw=mysqli_fetch_array($rst))
 {
 echo "<li>".$rcw[1]."  ".$rcw[2]."<br></li>";
 }
 }
 echo "</ul>"; 
?>