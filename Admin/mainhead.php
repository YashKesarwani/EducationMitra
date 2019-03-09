<link href="styleadm.css" rel="stylesheet">
 <link href="../bootstrap.min.css" rel="stylesheet">
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
      <li><a href="../Home.php">Home</a></li>
	  <li><a href="../Courses.php">Courses<img src="../Pics/new/1.png" width=10px; height=10px;></a>
			<ul>
				<li><a href="../Courses.php">Graduation Courses<img src="../Pics/new/3.png" width=10px; height=10px;></a>
				  <ul>
					<li><a href="../mbacourse.php">MBA</a></li>
					<li><a href="../engineering.php">ENGINEERING</a></li>
					<li><a href="../commerce.php">COMMERCE</a></li>
					<li><a href="../mbbscourse.php">MBBS</a></li>
				  </ul>	
				</li>
				<li><a href="../Courses.php">Professionl/Vocational Courses<img src="../Pics/new/3.png" width=10px; height=10px;></a>
				  <ul>
				    <li><a href="../fashion.php">Fashion designing</a></li>
				    <li><a href="../lawcourse.php">LAW</a></li>
					<li><a href="../Other.php">OTHERS<img src="../Pics/new/3.png" width=10px; height=10px;></a>
					 <ul>
					  <li><a href="../Animationcourse.php">Animations and Design</a></li>
					  <li><a href="../Information.php">Information Technology</a></li>
					  <li><a href="../art.php">Arts and Teaching</a></li>
					  <li><a href="../hospitality.php">Hospitality, Aviation and Tourism</a></li>
					  <li><a href="../media.php">Media, FIlms and Mass Comm.</a></li>
					 </ul> 
					</li> 
				  </ul>	
				</li>  
			</ul>			
	  </li>
	  <li><a href="../College.php">Colleges<img src="../Pics/new/1.png" width=10px; height=10px;></a>
		<ul>
		  <li><a href="../Gov_college.php">Government Colleges</a></li>
		  <li><a href="../Pvt_college.php">Private Colleges</a></li>
		</ul>
	  </li>
	  <?php
	  if((empty($_SESSION["userid"])))
		{
	  ?>
	  <li><a href="../Login.php">Login</a></li>
	  <li><a href="../Register.php">Register</a></li>
	  <?php
		}
	  ?>
	  <li><a href="../About Us.php">About Us</a></li>
	  <li><a href="../contactus.php">Contact Us</a></li>
	  <li><a href="../ask.php">Ask Experts</a></li>
	  <?php
	  if(!(empty($_SESSION["userid"])))
		{
	  ?>	   
	  	 <li><a href="../Users/intro.php">My Page</a></li>
		 <li><a href="../Users/Feedback.php?id=<?php echo $_SESSION["userid"]; ?>">Logout</a></li>
	  <?php	 
		} 
      ?>
     </ul>
	 </nav>
	</div>
 </div>
 <style>
	  nav
		{
			display: block;   
			text-align: center; 
		} 
		nav ul 
		{   
			margin: 0;   
			padding:0;   
			list-style: none;
			
		}
		.nav a 
		{   
			display:block;   
			background: #111;   
			color: #fff;   
			text-decoration: none;   
			padding: 0.8em 1.8em;   
			text-transform: uppercase;   
			font-size: 70%;   
			letter-spacing: 2px;     
			position: relative; 
		} 
		.nav
		{   
			vertical-align: top;
 
			border-radius:6px;
		} 
		.nav li 
		{
			position: relative; 
		} 

		.nav > li 
		{   
			float: left;   
			border-bottom: 4px #aaa solid;   
			margin-right: 1px; 
		}
		.nav > li > a 
		{   
			margin-bottom: 1px;   
			box-shadow: inset 0 2em .33em -0. ;
		}
		.nav > li:hover, .nav > li:hover > a
		{   
			border-bottom-color: #8CDFDD; 
		}
		.nav li:hover > a
		{   
			color:#8CDFDD; 
		}
		.nav > li:first-child
		{
			border-radius: 4px 0 0 4px;
		}
		.nav > li:first-child > a 
		{   
			border-radius: 4px 0 0 0; 
		}
		.nav > li:last-child 
		{
			border-radius: 0 0 4px 0;
			margin-right: 0; 
		} 
		.nav > li:last-child > a 
		{   
			border-radius: 0 4px 0 0; 
		}
		.nav li li a 
		{
			margin-top: 1px; 
		}
		.nav ul 
		{   
			position: absolute;   
			white-space: nowrap;   
			border-bottom: 5px solid  #8CDFDD;   
			z-index: 1;   
			left: -99999em; 
		}
		.nav > li:hover > ul 
		{   
			left: auto;   
			margin-top: 5px;   
			min-width: 100%; 
		} 
		.nav > li li:hover > ul 
		{
			left: 100%;   
			margin-left: 1px;   
			top: -1px; 
		}
		.nav > li > a:first-child:nth-last
		{	
			border-top-color: #aaa;
		}
		.nav > li:hover > a:first-child:nth-last
		{
			border: 5px solid transparent;   
			border-bottom-color: #8CDFDD;   
			margin-top:-5px 
		}
		.nav li li > a:first-child:nth-last 
		{
			border-left-color: #aaa;  
			margin-top: -5px 
		}
		.nav li li:hover > a:first-child:nth-last
		{
			border: 5px solid transparent;   
			border-right-color: #8CDFDD;   
			right: 10px; 
		}

   </style>
 </head>