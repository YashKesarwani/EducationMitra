<?php
 if(!(empty($_GET["coname"])))
{
 $coname=$_GET["coname"]."%";
 /*$displ=new city;
 $displ->display('course','coname',$coname);*/
 
 $con=mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db");
 $comd="select * from coursemaster where coname like '$coname'";
 $res=mysqli_query($con, $comd);

 while($rcw=mysqli_fetch_array($res))
 {
 echo "<option value='$rcw[1]' />";
 }
}
?>