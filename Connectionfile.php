<?php
  class db
	{
		var $con;
		function __construct()
		{
		  if(mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db"))	
		     $this->con=mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db");
		  else
		    die("Could Not Connect:".mysqli_error($this->con));	
		}	
	}
  class register extends db
	{
	    function insert($a,$b,$c,$d,$e,$f,$g,$h)
			{
			 $inf=" ";
			 $this->ins="insert into register(fname,lname,pass,mail,mobile,interest,course,city) 
			              values('$a','$b','$c','$d','$e','$f','$g','$h')"; 
			 if(mysqli_query($this->con,$this->ins))
			  {
			    $inf=1;
				$this->ids="select * from register where mobile='$e'" ;
				$rst=mysqli_query($this->con,$this->ids);
				$row=mysqli_fetch_array($rst);
				echo "<h2><center>Your user ID is ".$row[0]."<br></h2>";
			  }	
			 else
		      {	
			    $inf=-1;
				echo mysqli_error($this->con);
			  }	
			 
			return $inf;		
			} 
			
		function update($i,$a,$b,$c,$d,$e,$f,$g,$h)
			{
			 $this->upd="update register set fname='$a', lname='$b', pass='$c', mail='$d', mobile='$e', interest='$f', 
			 course='$g', city='$h' where uid='$i'";	
			 if(mysqli_query($this->con,$this->upd))
			  {
				$upf=1;
			  }	
			 else
		          {	
			    $upf=-1;
			  }	
			return $upf;
			}
			
		function select($id,$p)
			{
			 $spf=" ";
			$pass=sha1($p);
			 $this->sel="Select * from register where uid='$id' and pass='$pass'";
			 $res=mysqli_query($this->con,$this->sel);	
			 $row=mysqli_fetch_array($res);
			 if($row==0)
			  {
			    $spf=-1;
			  }	
			 else
		      {	
			    $spf=1;
			  }	
			return $spf;		
			}	
		function check($id)
			{
			 $spf=" ";
			 $this->sel="Select * from register where uid='$id'";
			 $res=mysqli_query($this->con,$this->sel);	
			 $row=mysqli_fetch_array($res);
			 if($row==0)
			  {	
			    $spf=-1;
			  }	
			 else
		      {	
			    $spf=1;
			  }	
			return $spf;		
			}	
	}	
  class news extends db
	{
		function disp()
		    {
			 $this->dis="select * from news order by nid desc";

			 $res=mysqli_query($this->con,$this->dis);
			 while($row=mysqli_fetch_array($res))
				{
				 echo "<ul>";
				 echo "<li>$row[1]</li>";
				 echo "</ul>";
				}
		    }
			
		function dispup()
		    {
			 $this->dis="select * from updatemaster order by upid desc";

			 $res=mysqli_query($this->con,$this->dis);
			 while($row=mysqli_fetch_array($res))
				{
				 echo "<ul>";
				 echo "<li>$row[1]</li>";
				 echo "</ul>";
				}
		    }	
	}
  class checkpass extends db
    {
	    function checkp($uid)
			{
			 $spf=" ";
			 $this->sel="Select * from register where uid='$uid'";
			 $res=mysqli_query($this->con,$this->sel);	
			 $row=mysqli_fetch_array($res);
			 $spf=$row[3];
			 return $spf;
			}
	
	}	
?> 