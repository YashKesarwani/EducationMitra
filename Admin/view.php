<?php
session_start();
include "check.php";
  $thispage="viewdb";
  include "Headeradm.php";
  include "Connect.php";  
?>  
 <title> Admin Home Page </title>

 <div class="container" style="margin:0px">
<?php
 if(isset($_GET["id"]))
 {
  if($_GET["id"]=="user")
   {
     $obj=new display; 
     $obj->viewuser();
   } 	
  if($_GET["id"]=="admin")
   {
     $obj=new display; 
     $obj->viewadmin();
   }    
  if($_GET["id"]=="college")
   {
     $obj=new display; 
     $obj->viewcollege();
   }  
  if($_GET["id"]=="course")
   {
     $obj=new display; 
     $obj->viewcourse();
   }  
  if($_GET["id"]=="city")
   {
     $obj=new display; 
     $obj->viewcity();
   }  
  if($_GET["id"]=="news")
   {
     $obj=new display; 
     $obj->viewnews();
   }  
  if($_GET["id"]=="exam")
   {
     $obj=new display; 
     $obj->viewexam();
   }
  if($_GET["id"]=="com")
   {
     $obj=new display; 
     $obj->viewcom();
   }
  if($_GET["id"]=="coc")
   {
     $obj=new display; 
     $obj->viewcoc();
   }   
 }
?> 
 </div>