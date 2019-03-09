<?php
if(!(empty($_GET["cname"])))
{
 $cname=$_GET["cname"]."%";
 /*$disp=new city;
 $ob=$disp->display('city','cname',$cname);
 echo $ob;*/ 
 $con=mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db");
 $cmd="select * from city where cname like '$cname'";
 $rst=mysqli_query($con, $cmd);
 while($row=mysqli_fetch_array($rst))
 {
 echo "<option value='$row[1]' />";
 }
}
if(!(empty($_GET["coname"])))
{
 $coname=$_GET["coname"]."%";
 /*$displ=new city;
 $displ->display('course','coname',$coname);*/ 
 $con=mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db");
 $comd="select * from course where coname like '$coname'";
 $res=mysqli_query($con, $comd);
 while($rcw=mysqli_fetch_array($res))
 {
 echo "<option value='$rcw[1]' />";
 }
}
?>