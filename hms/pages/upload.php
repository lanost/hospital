<?php
$xy=NULL;
 include '../link.php';
session_start();
error_reporting(0);
$opn=$_POST['opno'];
$opno=$opn."lab_result";

?>
<!DOCTYPE html>
<!-- Template by freewebsitetemplates.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>hCare</title>
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
					<li class="selected" id="link1"><a href="lab.php">lab home</a></li>
					<li id="link2"><a href=""></a></li>
					<li id="link3"><a href=""></a></li>
					</ul>
					<ul id="buttons">
						<li><a href="../contact.html">Contact Us</a></li>
						
					</ul>
				</div>
				<div>
				     
					    <br><br>
						
						<form method="post" action="upload_file.php">
						<input type="file" name='$opno' />
						<br><br>
						<button>Submit</button>
						</form>
						 
						 
						
						
				</div>
			</div>
			<div id="footer">
				
				<p id="footnote">&#169; Copyright &#169; 2011. Company name all rights reserved</p>
			</div>
		</div>
	</body>
</html>

