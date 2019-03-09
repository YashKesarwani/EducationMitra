<?php
 class connect
  {
    function __construct()
	 {
		$this->con=mysqli_connect("localhost","educatio_user","allahabad@123","educatio_db");
	 }	
  }	
	
 class display extends connect
  {
    function viewuser()
	{
	  $this->cmd="select * from register";
	  $res=mysqli_query($this->con,$this->cmd);
	  echo "<table width=300 border=3 >";
		 echo "<tr>";
		 echo "<th>User ID</th>";
		 echo "<th>First Name</th>";
		 echo "<th>Last Name</th>";
		 echo "<th>Password</th>";
		 echo "<th>Email</th>";
		 echo "<th>Mobile</th>";
		 echo "<th>Interest</th>";
		 echo "<th>Course</th>";
		 echo "<th>City</th>";
		 echo "<th>User Pic Location</th>";
		 echo "<th>Operation</th>";
		 echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
		 echo "<tr>";
		 echo "<td>$row[0]</td>";
		 echo "\t";
		 echo "<td>$row[1]</td>";
		 echo "\t";
		 echo "<td>$row[2]</td>";
		 echo "\t";
		 echo "<td>$row[3]</td>";
		 echo "\t";
		 echo "<td>$row[4]</td>";
		 echo "\t";
		 echo "<td>$row[5]</td>"; 
		 echo "\t";
		 echo "<td>$row[6]</td>";
		 echo "\t";
		 echo "<td>$row[7]</td>";
		 echo "\t";
		 echo "<td>$row[8]</td>";
		 echo "\t";
		 echo "<td>$row[9]</td>";
		 echo "\t";
		 echo "<td><a href='delete.php?uid=$row[0]'>Delete</a></td>";
		 echo "</tr>";
		}
	   echo "</table>" ;
	}
	
	function viewadmin()
	{
	  $this->cmd="select * from admin";
	  $res=mysqli_query($this->con,$this->cmd);
	  echo "<table width=500 border=3>";
		 echo "<tr>";
		 echo "<th>Admin ID</th>";
		 echo "<th>Admin Name</th>";
		 echo "<th>Password</th>";
		 echo "<th>Contact No.</th>";
		 echo "<th>Email-ID</th>";
		 echo "<th>City</th>";
		 echo "<th>Pic</th>";
		 echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
		 echo "<tr>";
		 echo "<td>$row[0]</td>";
		 echo "\t";
		 echo "<td>$row[1]</td>";
		 echo "\t";
		 echo "<td>$row[2]</td>";
		 echo "\t";
		 echo "<td>$row[3]</td>";
		 echo "\t";
		 echo "<td>$row[4]</td>";
		 echo "\t";
		 echo "<td>$row[5]</td>";
		 echo "\t";
		 echo "<td>$row[6]</td>";
		 echo "\t";
		 echo "</tr>";
		}
	   echo "</table>" ;
	}
	
	function viewcollege()
	{
	  $this->cmd="select * from college";
	  $res=mysqli_query($this->con,$this->cmd);
	  echo "<table width=500 border=3>";
		 echo "<tr>";
		 echo "<th>College ID</th>";
		 echo "<th>College Name</th>";
		 echo "<th>Address</th>";
		 echo "<th>Course-id</th>";
		 echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
		 echo "<tr>";
		 echo "<td>$row[0]</td>";
		 echo "\t";
		 echo "<td>$row[1]</td>";
		 echo "\t";
		 echo "<td>$row[2]</td>";
		 echo "\t";
		 echo "<td>$row[3]</td>";
		 echo "\t";
		 echo "</tr>";
		}
	   echo "</table>" ;
	}
	
	function viewcourse()
	{
	  $this->cmd="select * from course";
	  $res=mysqli_query($this->con,$this->cmd);
	  echo "<table width=500 border=3>";
		 echo "<tr>";
		 echo "<th>Course ID</th>";
		 echo "<th>Course Name</th>";
		 echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
		 echo "<tr>";
		 echo "<td>$row[0]</td>";
		 echo "\t";
		 echo "<td>$row[1]</td>";
		 echo "\t";
		 echo "</tr>";
		}
	   echo "</table>" ;
	}
	
	function viewcity()
	{
	  $this->cmd="select * from city";
	  $res=mysqli_query($this->con,$this->cmd);
	  echo "<table width=500 border=3>";
		 echo "<tr>";
		 echo "<th>City ID</th>";
		 echo "<th>City Name</th>";
		 echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
		 echo "<tr>";
		 echo "<td>$row[0]</td>";
		 echo "\t";
		 echo "<td>$row[1]</td>";
		 echo "\t";
		 echo "</tr>";
		}
	   echo "</table>" ;
	}
	
	function viewnews()
	{
	  $this->cmd="select * from news";
	  $res=mysqli_query($this->con,$this->cmd);
	  echo "<table width=500 border=3>";
		 echo "<tr>";
		 echo "<th>News ID</th>";
		 echo "<th>News Name</th>";
		 echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
		 echo "<tr>";
		 echo "<td>$row[0]</td>";
		 echo "\t";
		 echo "<td>$row[1]</td>";
		 echo "\t";
		 echo "</tr>";
		}
	   echo "</table>" ;
	}
	
	function viewexam()
	{
	  $this->cmd="select * from updatemaster";
	  $res=mysqli_query($this->con,$this->cmd);
	  echo "<table width=500 border=3>";
		 echo "<tr>";
		 echo "<th>ID</th>";
		 echo "<th>Updates</th>";
		 echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
		 echo "<tr>";
		 echo "<td>$row[0]</td>";
		 echo "\t";
		 echo "<td>$row[1]</td>";
		 echo "\t";
		 echo "</tr>";
		}
	   echo "</table>" ;
	}
	
	function viewcom()
	{
	  $this->cmd="select * from coursemaster";
	  $res=mysqli_query($this->con,$this->cmd);
	  echo "<table width=500 border=3>";
		 echo "<tr>";
		 echo "<th>Course ID</th>";
		 echo "<th>Course Name</th>";
		 echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
		 echo "<tr>";
		 echo "<td>$row[0]</td>";
		 echo "\t";
		 echo "<td>$row[1]</td>";
		 echo "\t";
		 echo "</tr>";
		}
	   echo "</table>" ;
	}
	
	function viewcoc()
	{
	  $this->cmd="select * from course_college";
	  $res=mysqli_query($this->con,$this->cmd);
	  echo "<table width=500 border=3>";
		 echo "<tr>";
		 echo "<th>College ID</th>";
		 echo "<th>Course ID</th>";
		 echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
		 echo "<tr>";
		 echo "<td>$row[0]</td>";
		 echo "\t";
		 echo "<td>$row[1]</td>";
		 echo "\t";
		 echo "</tr>";
		}
	   echo "</table>" ;
	}
	
  }	
  
  class update extends connect
  {
    function insertnews($n)
	{
	  $this->ins="insert into news(news) values ('$n')";
	  $rst=mysqli_query($this->con,$this->ins);
    }
  
    function insertcity($city)
	{
	  $this->ins="insert into city(cname) values ('$city')";
	  $rst=mysqli_query($this->con,$this->ins);
    }
	
	function insertcourse($course)
	{
	  $this->ins="insert into course(coname) values ('$course')";
	  $rst=mysqli_query($this->con,$this->ins);
    }
	
	function insertcollege($collid,$colname,$colladdr,$collcourse)
	{
	  $this->ins="insert into college values ('$collid','$colname','$colladdr','$collcourse')";
	  $rst=mysqli_query($this->con,$this->ins);
    }
	
	function insertcom($course)
	{
	  $this->ins="insert into coursemaster(coname) values ('$course')";
	  $rst=mysqli_query($this->con,$this->ins);
    }
	
	function insertcoc($colid,$coid)
	{
	  $this->ins="insert into course_college values ('$colid','$coid')";
	  $rst=mysqli_query($this->con,$this->ins);
    }
	
	function insertexam($exam)
	{
	  $this->ins="insert into updatemaster(updates) values ('$exam')";
	  $rst=mysqli_query($this->con,$this->ins);
    }
  }
  
  class insertadmin extends connect
  {
    function insert($aid,$aname,$apass,$acontact,$amail,$acity) 
	{
	  $this->ins="insert into admin(aid,aname,apass,acontact,aemail,acity) 
	  values('$aid','$aname','$apass','$acontact','$amail','$acity')";
	  $rst=mysqli_query($this->con,$this->ins);
	}
  }
  
  class admin extends connect
  { 
    function select($aname)
     {    
	    $ret=" ";
		
		$this->cmd="select * from admin where aname='$aname'";
		$res=mysqli_query($this->con,$this->cmd);
		$row=mysqli_fetch_array($res);
		$name=$row[1];
		$contact=$row[3];
		$mail=$row[4];
		$city=$row[5];
		$apic=$row[6];
		$ret=$name." ,".$contact." ,".$mail.", ".$city." ,".$apic;
		return ($ret); 
	}
	
    function insert($name,$apic)
     {
		$this->cmd="update admin set apic='$apic' where aname='$name'";
		mysqli_query($this->con,$this->cmd);
		 header("Location:Settings.php?task=done");
	 }
	 
	function check($name)
			{
			 $spf=" ";
			 $this->sel="Select * from admin where aname='$name'";
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
?>	 