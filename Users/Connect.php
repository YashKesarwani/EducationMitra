<?php
 class connect
  {
    function __construct()
	 {
		$this->con=mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db");
	 }	
  }	
	
 class register	extends connect
  {
    function select($uid)
     {    
	    $ret=" ";
		$this->cmd="select * from register where uid='$uid'";
		$res=mysqli_query($this->con,$this->cmd);
		$row=mysqli_fetch_array($res);
		$name=$row[1]." ".$row[2];
		$pn=$row[5];
		$mail=$row[4];
		$city=$row[8];
		$des=$row[6];
		$int=$row[7];
		$pic=$row[9];
		$ret=$name." ,".$pn." ,".$mail.", ".$city." ,".$des." ,".$int." ,".$pic;
		return ($ret); 
	}
	function sel($uid)
	 {
		$this->cmd="select * from register where uid='$uid'";
		$res=mysqli_query($this->con,$this->cmd);
		$row=mysqli_fetch_array($res);
		$name=$row[1]." ".$row[2];
		return $name;
	 }
  }	 
 class user extends connect
  {
    function insert($uid,$upic)
     {
		$this->cmd="update register set upic='$upic' where uid='$uid'";
		if(mysqli_query($this->con,$this->cmd))
		 header("Location:Settings.php?task=done");
	 }
  } 
  
  
?>  