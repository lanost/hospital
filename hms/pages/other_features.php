<?php
$xy=NULL;
 include '../link.php';
session_start();
error_reporting(0);
$id=$_SESSION['usrname'];

$sel=mysql_query("select * from register where slno='$id'");
		while($row=mysql_fetch_array($sel))
	{
		$xy=$row['fname'];
		
	}

?>
<!DOCTYPE html>
<!-- Template by freewebsitetemplates.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Dentist Web Template</title>
		<link rel="stylesheet" href="../css/style.css" type="text/css" />
		<link rel="stylesheet" href="../css/table.css" type="text/css" />
	</head>
	<body>
		<div id="page">
			<div id="header">
				<ul id="navigation">
					
					<br><br><br>
					<li><img src="../images/logo.png" alt="logo"/></li>
					
					
				</ul>
			</div>
			<div class="content">
				<div class="navigation">
					<ul>
					<li class="selected" id="link1"><a href="bp.php">Blood Pressure Condition</a></li>
					<li id="link2"><a href="diabetic.php">Diabetic Condition</a></li>
					<li id="link3"><a href="cardiac.php">Cardiac Condition</a></li>
					
					</ul>
					<ul id="buttons">
					    <li><a href="patient.php">Patient home</a></li>
						<li><a href="../contact.html">Contact Us</a></li>
						
						
					</ul>
				</div>
				<div>
					
						
						
				</div>
			</div>
			<div id="footer">
				
				<p id="footnote">&#169; Copyright &#169; 2011. Company name all rights reserved</p>
			</div>
		</div>
	</body>
</html>

