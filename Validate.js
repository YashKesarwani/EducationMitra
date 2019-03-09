<script>
    function getcity(str)
	 {
	  var a=new XMLHttpRequest();
	  a.open("GET", "getcity.php?cname="+str,true);
	  a.send();
	  a.onreadystatechange=function test1()
	  {	
		if(a.readyState==4)
		 document.getElementById("list2").innerHTML=a.responseText; 
	  }
     }
	function getcourse(cou)
	 {
		var b=new XMLHttpRequest();
		b.open("GET", "getcity.php?coname="+cou,true);
		b.send();
		b.onreadystatechange=function test2()
	  {	
		if(b.readyState==4)
		 document.getElementById("list1").innerHTML=b.responseText; 
		 
	  }
	 }	
	function checkmail(mail)
	 {
		var c=new XMLHttpRequest();
		c.open("GET", "Validate.php?mail="+mail,true);
		c.send();
		c.onreadystatechange=function test3()
	  {	
		if(c.readyState==4)
		 document.getElementById("chck1").innerHTML=c.responseText; 
	  }
	 }
	function checknum(num)
	 {
 		 if(num.length<10||num.length>10)
		 {
		  document.getElementById("chck2").innerHTML="Mobile number should be of 10 digits";
		 }
		else
		 {
		  document.getElementById("chck2").innerHTML="";
	      	 }
	 }
	function checkpass(pass)
	 {
 		 if(pass.length>20)
		 {
		  document.getElementById("chck0").innerHTML="Password should not be of more than 20 characters";
		 }
		else if(pass.length<5)
		 {
		  document.getElementById("chck0").innerHTML="Password should be of atleast 5 characters";
		 }
		else
		{
		  document.getElementById("chck0").innerHTML="";
  		}
	 }

   </script>