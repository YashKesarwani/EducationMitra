<?php
 include "Connect.php";
 if(isset($_POST["aid"]))
  {
    $faid=$_POST["aid"];
	$aid=filter_var($faid,FILTER_SANITIZE_SPECIAL_CHARS);
	$faname=$_POST["aname"];
	$aname=filter_var($faname,FILTER_SANITIZE_SPECIAL_CHARS);
	$apass=sha1($_POST["apass"]);
	$acontact=$_POST["acontact"];
	$fmail=$_POST["amail"];
	$amail=filter_var($fmail,FILTER_SANITIZE_EMAIL);
	$fcity=$_POST["acity"];
	$acity=filter_var($fcity,FILTER_SANITIZE_SPECIAL_CHARS);
	$obj=new insertadmin;
	$obj->insert($aid,$aname,$apass,$acontact,$amail,$acity);
	header("Location:Registeradm.php?task=done");
  }
?>  