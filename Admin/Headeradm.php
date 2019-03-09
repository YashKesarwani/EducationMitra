<html>
 <head>
    <link href="styleadm.css" rel="stylesheet">
	<link href="../bootstrap.min.css" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="57x57" href="../Favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../Favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../Favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../Favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../Favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../Favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../Favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../Favicon/apple-icon-152x152.png">	
	<link rel="apple-touch-icon" sizes="180x180" href="../Favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../Favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../Favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../Favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../Favicon/favicon-16x16.png">
	<link rel="manifest" href="../Favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../Favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
  <div id="adm1">  
   EducationMitra.in
    <div id="adm2">
	 <nav class="navbar navbar-inverse">
     <ul class="nav navbar-nav">
	<?php
	  if($thispage=="home")
		{	
			echo "<li class=\"active\"><a href=\"Admhome.php\">Home</a></li>";
		}
	  else
		{
			echo "<li><a href=\"Admhome.php\">Home</a></li>";
		}	
	  if($thispage=="settings")
		{
			echo "<li class=\"active\"><a href=\"Settings.php\">Settings</a></li>"; 
		}
	  else
		{
			echo "<li><a href=\"Settings.php\">Settings</a></li>"; 
		}
	  if($thispage=="register")
		{
			echo "<li class=\"active\"><a href=\"Registeradm.php\">Register New Admin</a></li>";
		}
	  else
		{
			echo "<li><a href=\"Registeradm.php\">Register New Admin</a></li>";
		}	
	  if($thispage=="viewdb")
		{
			echo "<li class=\"active\"><a href=\"viewdb.php\">View Database</a></li>";
		}
	  else
		{
			echo "<li><a href=\"viewdb.php\">View Database</a></li>";
		}
	  if($thispage=="updatedb")	
		{
		 	echo "<li class=\"active\"><a href=\"Updatedb.php\">Update Databases</a></li>";
		}
	  else		
	    {
		 	echo "<li><a href=\"Updatedb.php\">Update Databases</a></li>";
		}
	?>	
	  <li><a href="Logout.php">Logout</a></li>
     </ul>
	 </nav>
	</div>
  </div>
 </head>	