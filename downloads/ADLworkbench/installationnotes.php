<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Modelling Tools</title>

	<meta name="description" content="openEHR provides open source specifications and reference implementations of future proof EHR systems">
	<meta name="keywords" content="archetypes, openEHR, EHR, electronic health record, electronic medical record, ADL, reference model, clinical models, healthcare, health informatics, medical informatics, EHR standards, ISO 18308, CEN 13606, health care software, open source software, knowledge modelling, patient-centric">
	<meta name="author" content="Sam Heard, Thomas Beale">
	<meta name="copyright" content="The openEHR Foundation">
	<meta name="design" content="Adriana Danilakova">
	<meta name="distribution" content="Global">
	
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-after" content="15 days">
	<meta name="viewport" content="1024">

	<link rel="stylesheet" href="http://www.openehr.org/new-ws/site/styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="http://www.openehr.org/new-ws/site/styles/programs.css"  type="text/css"> 
	<link rel="stylesheet" href="http://www.openehr.org/new-ws/site/styles/menu.css" type="text/css"> 
	
	<link rel="home" href="http://www.openehr.org">
	<link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
	<link rel="index" href="http://www.openehr.org/sitemap">

	<script type="text/javascript" src="http://www.openehr.org/new-ws/site/menu/dropdown.js"></script> 
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include 'http://www.openehr.org/new-ws/site/panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		<div class="nav">
   		 <?php include 'http://www.openehr.org/new-ws/site/menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea">
		
		<div id="SideMenu">
		<?php include 'menu/adlmenu.php' ?>
		</div>

		<div id="TextArea">
			<h1>Installation Notes</h1>
			
		
		</div>

	</div>

	<div id="BottomMenu">
	<?php include 'http://www.openehr.org/new-ws/site/menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include 'http://www.openehr.org/new-ws/site/panel/bottompanel.php' ?>
	</div>

</div>

<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>