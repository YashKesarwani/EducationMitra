<?php
session_start();
include "check.php";
 $thispage="settings";
 include "Headeradm.php";
?>  
<title> Delete </title>
<?php
if(isset($_GET["task"]))
{
echo"Record has been deleted";
}
$con=mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db");
$cmd="Select * from register";
$res=mysqli_query($con,$cmd);
echo "<table border=5  style=\"position:relative; top:80px; width:95%; margin-left:20px; margin-right:20px; height:100px\">";
while($row=mysqli_fetch_array($res))
{
 echo "<tr>";
 echo "<td>".$row[0]."</td>";
 echo "<td>".$row[1]."</td>";
 echo "<td>".$row[2]."</td>";
 echo "<td>".$row[3]."</td>";
 echo "<td>".$row[4]."</td>";
 echo "<td>".$row[5]."</td>";
 echo "<td>".$row[6]."</td>";
 echo "<td>".$row[7]."</td>";
 echo "<td>".$row[8]."</td>";
 echo "<td><a href='delete.php?uid=$row[0]'>Delete</a></td>";
 echo "</tr>";
}
echo "</table>";
?>


<!--Delete database-->