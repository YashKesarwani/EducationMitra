<?php
 include "Menu.php";	
 $uid=$_SESSION["userid"];
 include "Connect.php";
 $upic="Userpics/".$_FILES["upic"]["name"];
 $utpic=$_FILES["upic"]["tmp_name"];
 move_uploaded_file($utpic,$upic); 
 $obj=new user;
 $upic=$obj->insert($uid,$upic);
?> 