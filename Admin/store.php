<?php
session_start();
include "check.php";
include "Connect.php"; 
?>  
<div class="container" style="margin:10px; font-size:18px;">
<?php
 if(isset($_GET["id"]))
 {
  if($_GET["id"]=="news")
   {
     $fnews=$_GET["news"];
	 $news=filter_var($fnews,FILTER_SANITIZE_SPECIAL_CHARS);
     $obj=new update; 
     $obj->insertnews($news);
	 header("Location:Settings.php?task=news");
   } 
  if($_GET["id"]=="city")
   {
     $fcity=$_GET["city"];
	 $city=filter_var($fcity,FILTER_SANITIZE_SPECIAL_CHARS);
     $obj=new update; 
     $obj->insertcity($city);
	 header("Location:Settings.php?task=city");
   }   
  if($_GET["id"]=="course")
   {
     $fcourse=$_GET["course"];
	 $course=filter_var($fcourse,FILTER_SANITIZE_SPECIAL_CHARS);
     $obj=new update; 
     $obj->insertcourse($course);
	 header("Location:Settings.php?task=course");
   } 
  if($_GET["id"]=="college")
   {
     $fcollid=$_GET["collid"];
	 $collid=filter_var($fcollid,FILTER_SANITIZE_SPECIAL_CHARS);
	 $fcolname=$_GET["collname"];
	 $colname=filter_var($fcolname,FILTER_SANITIZE_SPECIAL_CHARS);
	 $fcolladdr=$_GET["colladdr"];
	 $colladdr=filter_var($fcolladdr,FILTER_SANITIZE_SPECIAL_CHARS);
	 $fcollcourse=$_GET["collcourse"];
	 $collcourse=filter_var($fcollcourse,FILTER_SANITIZE_SPECIAL_CHARS);
     $obj=new update; 
     $obj->insertcollege($collid,$colname,$colladdr,$collcourse);
	 header("Location:Settings.php?task=college");
   }
  if($_GET["id"]=="com")
   {
     $fcourse=$_GET["course"];
	 $course=filter_var($fcourse,FILTER_SANITIZE_SPECIAL_CHARS);
     $obj=new update; 
     $obj->insertcom($course);
	 header("Location:Settings.php?task=com");
   } 
  if($_GET["id"]=="coc")
   {
     $fcolid=$_GET["colid"];
	 $fcoid=$_GET["coid"];
	 $colid=filter_var($fcolid,FILTER_SANITIZE_SPECIAL_CHARS);
	 $coid=filter_var($fcoid,FILTER_SANITIZE_SPECIAL_CHARS);
     $obj=new update; 
     $obj->insertcoc($colid,$coid);
	 header("Location:Settings.php?task=coc");
   } 
  if($_GET["id"]=="exam")
   {
     $fexam=$_GET["exam"];
	 $exam=filter_var($fexam,FILTER_SANITIZE_SPECIAL_CHARS);
     $obj=new update; 
     $obj->insertexam($exam);
	 header("Location:Settings.php?task=exam");
   }
 }
?>
</div> 

<?php
 include "Footeradm.php";
?>   