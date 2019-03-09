<?php	
 session_start();
 $name=$_SESSION["admin"];
 include "Connect.php";
 $apic="Adminpics/".$_FILES["apic"]["name"];
 $atpic=$_FILES["apic"]["tmp_name"];
 move_uploaded_file($atpic,$apic); 
 $obj=new admin;
 $apic=$obj->insert($name,$apic);
?> 